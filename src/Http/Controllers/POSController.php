namespace Webkul\POSPayment\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class POSController extends Controller
{
    public function processPayment(Request $request, $bank)
    {
        $bankConfig = Config::get("pospayment.banks.$bank");

        if (!$bankConfig) {
            return response()->json(['error' => 'Desteklenmeyen banka'], 400);
        }

        // Ödeme işlemi API'ye gönder
        $response = $this->sendPaymentToBank($bankConfig, $request->all());

        return response()->json($response);
    }

    private function sendPaymentToBank($config, $data)
    {
        // Banka API'sine ödeme gönderme işlemi
        return [
            'status' => 'success',
            'message' => 'Ödeme başarıyla gerçekleştirildi!'
        ];
    }
}
