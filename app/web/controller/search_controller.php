<?php
require_once('controller_base.php');
class SearchController extends Controller
{
    public function index()
    {
        parent::render_view('search');
    }
}
