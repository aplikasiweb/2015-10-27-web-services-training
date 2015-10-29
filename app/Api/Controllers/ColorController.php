<?php

namespace Api\Controllers;

use App\Color;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\ColorRequest;
use Api\Transformers\ColorTransformer;

/**
 * @Resource('Colors', uri='/colors')
 */
class ColorController extends BaseController
{

    public function __construct()
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all colors
     *
     * Get a JSON representation of all the colors
     *
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Color::all(), new ColorTransformer);
    }

    /**
     * Store a new color in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        return Color::create($request->only(['name', 'code', 'is_active']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Color::findOrFail($id), new ColorTransformer);
    }

    /**
     * Update the color in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request, $id)
    {
        $color = Color::findOrFail($id);
        $color->update($request->only(['name', 'code','is_active']));
        return $color;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Color::destroy($id);
    }
}