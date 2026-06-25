<?php

return function ($page) {

    $articles = $page->children()->listed()->sortBy('date', 'desc');

    // add pagination
    $articles = $articles->paginate(10);

    // create a shortcut for pagination
    $pagination = $articles->pagination();

    // pass $articles and $pagination to the template
    return [
        'articles' => $articles,
        'pagination' => $pagination
    ];
};
