<?php

namespace App\Services;

use App\Models\Category;

class CategoryServices
{
    public function __construct(public Category $category){}

    public function index()
    {
        return $this->category
            ->where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);
    }

    public function store(array $data)
    {
        $data['user_id'] = auth()->id();
        return $this->category->create($data);
    }

}
