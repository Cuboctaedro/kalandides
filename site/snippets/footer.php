<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

?>
</main>

<footer>
    <div class="container mx-auto border-t border-gray-300 flex items-start justify-between gap-6">
        <div>
            <?php
            $footer_menu = $site->footerMenu()->toPages();
            if ($footer_menu->isNotEmpty()): ?>
                <nav>
                    <ul>
                        <?php foreach ($footer_menu as $item):
                        ?>
                            <li>
                                <a class="text-slate-900 hover:text-slate-700 text-sm p-2" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
        <div>&copy; <?= date('Y') ?> <?= $site->title()->html() ?>. All rights reserved.</div>
    </div>

</footer>

<?= js('assets/main.js') ?>


</body>

</html>