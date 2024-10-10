<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use League\Csv\Reader;
use League\Csv\Statement;

class ImportController extends Controller
{
    public function index()
    {
        $data = session('csv_data', []);
        return view('admin.product.index', compact('data'));
    }

    public function importCsv(Request $request)
    {
        try {
          
            $validator = Validator::make($request->all(), [
                'csv_file' => 'required|file|mimes:csv,txt',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'message' => $validator->errors()->first()], 400);
            }


            $path = $request->file('csv_file')->store('csv_files');


            $csv = array_map('str_getcsv', file(Storage::path($path)));


            if (empty($csv) || !isset($csv[0]) || count($csv[0]) < 5) {
                return response()->json(['success' => false, 'message' => 'CSV file is empty or improperly formatted'], 400);
            }


            $data = [];
            foreach ($csv as $row) {
                $data[] = [
                    'code_a_bar' => $row[0],
                    'taille' => $row[1],
                    'couleur' => $row[2],
                    'prix' => $row[3],
                    'remise' => $row[4],
                ];
            }


        / Retourner la réponse JSON
            return response()->json(['success' => true, 'message' => 'CSV imported successfully', 'data' => $data], 200);

        } catch (\Exception $e) {

            \Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Internal Server Error'], 500);
        }
}
