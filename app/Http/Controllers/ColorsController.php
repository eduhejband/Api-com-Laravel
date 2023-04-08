use GuzzleHttp\Client;

public function getColorInfo()
{
    $client = new Client();
    $response = $client->request('GET', 'https://www.thecolorapi.com/id?hex=FF0000');

    $statusCode = $response->getStatusCode();
    $body = $response->getBody();

    return response()->json($body, $statusCode);
}
