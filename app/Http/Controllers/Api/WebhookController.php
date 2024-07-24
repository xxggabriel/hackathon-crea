<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Webhook;
use Illuminate\Http\Request;

class WebhookController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'eventos' => 'required|array',
        ]);

        $webhook = Webhook::create($validated);

        return response()->json($webhook, 201);
    }

    public function show($id)
    {
        $webhook = Webhook::find($id);

        if (!$webhook) {
            return response()->json(['error' => 'Webhook not found'], 404);
        }

        return response()->json($webhook);
    }

    public function update(Request $request, $id)
    {
        $webhook = Webhook::find($id);

        if (!$webhook) {
            return response()->json(['error' => 'Webhook not found'], 404);
        }

        $validated = $request->validate([
            'url' => 'url',
            'eventos' => 'array',
        ]);

        $webhook->update($validated);

        return response()->json($webhook);
    }

    public function destroy($id)
    {
        $webhook = Webhook::find($id);

        if (!$webhook) {
            return response()->json(['error' => 'Webhook not found'], 404);
        }

        $webhook->delete();

        return response()->json(['message' => 'Webhook deleted successfully']);
    }
}
