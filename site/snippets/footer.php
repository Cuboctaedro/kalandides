<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

?>
</main>

<footer>
    <div class="container mx-auto border-t border-gray-300 flex items-start justify-between gap-6 font-sans py-6 mt-12">
        <div>
            <?php
            $footer_menu = $site->footerMenu()->toPages();
            if ($footer_menu->isNotEmpty()): ?>
                <nav>
                    <ul class="block">
                        <?php foreach ($footer_menu as $item):
                        ?>
                            <li class="inline-block pr-4">
                                <a class="text-slate-900 hover:text-slate-700  uppercase" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
        <div class="text-sm text-slate-500">
            &copy; <?= date('Y') ?> <?= $site->title()->html() ?>. All rights reserved.
        </div>
    </div>

</footer>

<?= js('assets/main.js') ?>


</body>

</html>