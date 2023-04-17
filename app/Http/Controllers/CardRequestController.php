<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCardRequest;
use App\Models\CardRequest;
use Illuminate\Http\Request;

class CardRequestController extends Controller
{
    public function createCardRequest(CreateCardRequest $request)
    {
        // Save the card request to the database
        $cardRequest = new CardRequest([
            'customer_name' => $request->input('customer_name'),
            'card_number' => $request->input('card_number'),
            'status' => 'Pending',
        ]);
        $cardRequest->save();

        // Return a success response to the FinTech system
        return response()->json([
            'message' => 'Card request created successfully',
            'card_request' => $cardRequest,
        ], 201);
    }

    public function getCardRequestStatus($id)
    {
        // Retrieve the card request from the database
        $cardRequest = CardRequest::find($id);

        // Check if the card request exists
        if (!$cardRequest) {
            return response()->json([
                'message' => 'Card request not found',
            ], 404);
        }

        // Return the status of the card request to the FinTech system
        return response()->json([
            'message' => 'Card request status retrieved successfully',
            'card_request' => $cardRequest,
        ], 200);
    }
}
