<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * 
     * 
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sql = Testimonial::toSql(); // Add this line to get the generated SQL query
        // dd($sql);
        $testimonials = Testimonial::paginate(config('pagination.count'));
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $data = $request->validated();

        // steps of uploading an image

        // 1- get the image
        $image = $request->image;
        // 2-rename the image
        $newImageName = time() . '_' . $image->getClientOriginalName();
        // 3-move the image to my project
        $image->storeAs('testimonials', $newImageName, 'public');
        // 4-save new name to my project
        $data['image'] = $newImageName;

        Testimonial::create($data);
        return to_route('admin.testimonials.index')->with('success', __('keywords.created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
        // steps of uploading an image
        if ($request->hasFile('image')) {

            // 0- delte old image
            Storage::delete("public/testimonials/$testimonial->image");

            // 1- get the image
            $image = $request->image;
            // 2-rename the image
            $newImageName = time() . '_' . $image->getClientOriginalName();
            // 3-move the image to my project
            $image->storeAs('testimonials', $newImageName, 'public');
            // 4-save new name to my project
            $data['image'] = $newImageName;
        }
        $testimonial->update($data);

        return to_route('admin.testimonials.index')->with('success', __('keywords.updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::delete("public/testimonials/$testimonial->image");
        $testimonial->delete();
        return to_route('admin.testimonials.index')->with('success', __('keywords.deleted_successfully'));
    }
}
