<?php

namespace LaravelEnso\CommentsManager\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\CommentsManager\app\DAOs\Tags;

class TaggableUserController extends Controller
{
    private $tags;

    public function __construct()
    {
        $this->tags = new Tags();
    }

    public function getList($query = null)
    {
        return $this->tags->getTaggableUsers($query);
    }
}