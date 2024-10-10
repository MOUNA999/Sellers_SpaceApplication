<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use App\Models\Categorie;
class productAdminController extends Controller
{

    //---------API---------------------------------------------------------------------------------------------------------------------------------------------
    public function getProduct(){
        $products = Product::with('categorie')->get();

        $response = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'code_a_bar' => $product->code_a_bar,
                'reference' => $product->reference,
                'libelle' => $product->libelle,
                'categorie' => $product->Categorie ? [
                    'id' => $product->Categorie->id,
                    'libelle' => $product->Categorie->libelle,
                ] : null,
                'qt_stock' => $product->qt_stock,
                'couleur' => $product->couleur,
                'taille' => $product->taille,
                'prix' => $product->prix,
                'remise' => $product->remise,
                'created_at' => $product->created_at,
                'updated_at' => $product->updated_at,
            ];
        });

        return response()->json($response);
    }
//------------------------------------------------
    public function getOneProduct($id){
        $product = Product::with('categorie')->find($id);
        if (!$product) {
            $product = Product::with('categorie')->where('code_a_bar',$id)->first();
            if (!$product) {
                return response()->json(['error' => 'Product not found'], 404);
            }
        }

        $response = [
            'id' => $product->id,
            'code_a_bar' => $product->code_a_bar,
            'reference' => $product->reference,
            'libelle' => $product->libelle,
            'categorie' => $product->Categorie ? [
                'id' => $product->Categorie->id,
                'libelle' => $product->Categorie->libelle,
            ] : null,
            'qt_stock' => $product->qt_stock,
            'couleur' => $product->couleur,
            'taille' => $product->taille,
            'prix' => $product->prix,
            'remise' => $product->remise,
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
        ];

        return response()->json($response);
    }
    //--------------------------------------------
    public function getByCodeBar($codeBar)
    {
        $products = Product::where('code_a_bar', $codeBar)->get();
        return response()->json($products);
    }
//--------------------------------------------
    public function getByCategory($category)
    {
        $products = Product::where('categorie_id', $category)->get();
        return response()->json($products);
    }
//----------------------------------------------------
public function getByReference($reference)
{
    $products = Product::where('reference', $reference)->get();
    return response()->json($products);
}

//---------------------------------------------------------------
public function add(Request $request)
{
    $request->validate([
        'code_a_bar' => 'required|string',
        'reference' => 'required|string',
        'libelle' => 'required|string',
        'categorie_id' => 'required|exists:categories,id',
        'qt_stock' => 'required|integer',
        'couleur' => 'required|string',
        'taille' => 'required|string',
        'prix' => 'required|numeric',
        'remise' => 'required|numeric',
    ]);
    $product = new Product();
    $product->code_a_bar = $request->input('code_a_bar');
    $product->reference = $request->input('reference');
    $product->libelle = $request->input('libelle');
    $product->categorie_id = $request->input('categorie_id');
    $product->qt_stock = $request->input('qt_stock');
    $product->couleur = $request->input('couleur');
    $product->taille = $request->input('taille');
    $product->prix = $request->input('prix');
    $product->remise = $request->input('remise');

    $product->save();

    return response()->json(['message' => 'Product added successfully'], 201);
}
//----------------------------------------------------
public function update(Request $request, $id)
{
    $product = Product::find($id);
    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    elseif ($request->has('reference') && $request->input('reference') !== $product->reference) {
        return response()->json(['error' => 'Vous n\'êtes pas autorisé à modifier la référence.'], 403);
    }

    elseif ($request->has('code_a_bar') && $request->input('code_a_bar') !== $product->code_a_bar) {
        return response()->json(['error' => 'Vous n\'êtes pas autorisé à modifier le code à bar.'], 403);
    }

    elseif ($request->input('qt_stock') < -1) {
        return response()->json(['error' => 'La quantité en stock ne peut pas être inférieure à -1.'], 422);
    }
    elseif (!is_numeric($request->input('qt_stock'))) {
        return response()->json(['error' => 'La quantité en stock doit être un nombre.'], 422);
    }

    elseif ($request->input('remise') > 100) {
        return response()->json(['error' => 'La remise ne peut pas être supérieure à 100%.'], 422);
    }

    elseif ($request->input('prix') < 0) {
        return response()->json(['error' => 'Le prix ne peut pas être inférieur à 0.'], 422);
    }

    $product->update($request->except(['reference', 'code_a_bar']));

    return response()->json($product);

}

//----------------------------------------------------------------------------------------------------------------------------------------------------------

    function index(){
        $products = Product::get();
        $products = Product::paginate();
        return view('admin.product.index',compact('products'));
    }
    public function addProductForm()
    {
        return view('admin.product.add');
    }
    public function updateForm($id)
    {
        $produit=Product::find($id);
        if (!$produit) abort(404);

        return view('admin.product.update', compact("produit"));
    }
    public function addProduct(Request $request) {

        if (!$request->has('code_a_bar') || !$request->has('reference') || !$request->has('libelle') ||!$request->has('categorie') || !$request->has('qt_stock') || !$request->has('couleur') || !$request->has('taille')  || !$request->has('prix') || !$request->has('remise')) {
            return response()->json(['message' => 'Missing required fields'], 400);
        }

        $produit = new Product;
        $produit->code_a_bar = $request->input('code_a_bar');
        $produit->reference = $request->input('reference');
        $produit->libelle = $request->input('libelle');
        $produit->categorie = $request->input('categorie');
        $produit->qt_stock = $request->input('qt_stock');
        $produit->couleur = $request->input('couleur');
        $produit->taille = $request->input('taille');
        $produit->prix = $request->input('prix');
        $produit->remise = $request->input('remise');

        $produit->save();


        return view('admin.product.add');
    }


    public function updateProduct(Request $request, $id){
        $prod = Product::find($id);

        if (is_null($prod)) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $prod->update($request->all());


        return redirect()->route('product', ['id' => $prod->id])->with('success', 'Product updated successfully');
    }

    public function deleteProduct(Request $request, $id){
            $prod=Product::find($id);
            if(is_null($prod)){
                return response()->json(['message'=>'product not found'],404);
            }
        $prod->delete();
        return response()->json(null,204);

    }



    public function importCSV(Request $request)
    {
        $file = $request->file('import_csv');
        $handle = fopen($file->path(), 'r');

        $chunksize = 300;
        while (!feof($handle)) {
            $chunkdata = [];
            for ($i = 0; $i < $chunksize; $i++) {
                $data = fgetcsv($handle);
                if ($data === false) {
                    break;
                }
                $chunkdata[] = $data;
            }
            $result = $this->getChunkData($chunkdata);
            if ($result['error']) {
                return redirect()->back()->with('error', $result['error']);
            }
        }
        fclose($handle);

        return redirect()->route('product')->with('success', 'Data has been added successfully.');
    }

    public function getChunkData($chunkData) {
        $errors = [];
        $successCount = 0;

        foreach ($chunkData as $row) {
            $stringValue = implode('', $row);
            $dataArray = str_getcsv($stringValue, ';');

            if (count($dataArray) != 9) {
                $errors[] = 'Invalid row format !  ' ;
                continue;
            }

            $codeABar = $dataArray[0];
            $reference = $dataArray[1];
            $libelle = $dataArray[2];
            $categorieLibelle = $dataArray[3];
            $couleur = $dataArray[4];
            $taille = $dataArray[5];
            $qtStock = $dataArray[6];
            $prix = $dataArray[7];
            $remise = $dataArray[8];

            if (empty($codeABar) || empty($reference) || empty($libelle) || empty($categorieLibelle) || empty($couleur) || empty($taille) || empty($qtStock) || empty($prix)) {
                $errors[] = 'Missing value in row: ' . implode(';', $dataArray);
                continue;
            }

            if (strpos($codeABar, ' ') !== false) {
                $errors[] = '  Bar code contains spaces in row !  ';
                continue;
            }

            try {
                $existingProduct = Product::where('code_a_bar', $codeABar)->first();

                if ($existingProduct) {
                    $existingProduct->qt_stock += $qtStock;
                    $existingProduct->save();
                } else {
                    $product = new Product();
                    $product->code_a_bar = $codeABar;
                    $product->reference = $reference;
                    $product->libelle = $libelle;

                    $categorie = Categorie::where('libelle', $categorieLibelle)->first();
                    if ($categorie) {
                        $product->categorie_id = $categorie->id;
                    } else {

                        $categorie = new Categorie();
                        $categorie->libelle = $categorieLibelle;
                        $categorie->save();
                        $product->categorie_id = $categorie->id;
                    }

                    $product->couleur = $couleur;
                    $product->taille = $taille;
                    $product->qt_stock = $qtStock;
                    $product->prix = $prix;
                    $product->remise = $remise;
                    $product->save();
                }

                $successCount++;
            } catch (\Exception $e) {
                $errors[] = 'Error saving row: ' . implode(';', $dataArray) . ' - ' . $e->getMessage();
            }
        }

        $errorMessage = '';
        if (!empty($errors)) {
            $errorMessage = 'Some rows were not added due to errors: ' . implode(', ', $errors);
        }

        $successMessage = 'Data has been added successfully. Total rows added: ' . $successCount;

        return [
            'error' => $errorMessage,
            'success' => $successMessage,
        ];
    }
}