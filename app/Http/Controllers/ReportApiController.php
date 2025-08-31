<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class ReportApiController extends BaseController
{
    // Handle report requests (GET or POST)
    public function handle(Request $request)
    {
        try {
            // Adjust this path if you move the report viewer files
            $apiIndexPath = 'C:/Users/Veera/Downloads/serialnumberinspectiongen4 2/serialnumberinspectiongen4/SourceCode/Application/Application/SerialNumberInspectionReports/Web Report/ReportViewer/apiIndex.php';

            if (!file_exists($apiIndexPath)) {
                Log::error("ReportApiController: apiIndex.php not found at: $apiIndexPath");
                return response()->json(['Result' => false, 'Error' => 'Report engine file not found.'], 500);
            }

            // Include the legacy procedural code.(apiIndex.php declares namespace App\Http\Controllers)
            require_once $apiIndexPath;

            // Convert request input to stdClass (the legacy functions expect an object)
            $params = (object) $request->all();

            if (!function_exists('AllReportsData')) {
                Log::error('ReportApiController: AllReportsData function unavailable after including apiIndex.php');
                return response()->json(['Result' => false, 'Error' => 'Report function unavailable.'], 500);
            }

            // Call the legacy report generator and return JSON
            $result = AllReportsData($params);
            return response()->json($result);
        } catch (\Throwable $ex) {
            Log::error('ReportApiController::handle error', ['error' => $ex->getMessage(), 'trace' => $ex->getTraceAsString()]);
            return response()->json(['Result' => false, 'Error' => $ex->getMessage()], 500);
        }
    }
}