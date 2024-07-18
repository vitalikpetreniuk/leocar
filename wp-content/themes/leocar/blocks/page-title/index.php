<section class="leo-page-title pt-8">
    <div class="container">
        <nav class="breadcrumbs flex justify-center items-center text-[12px] opacity-70 1100:text-base">
            <span><a href="<?=home_url()?>"><?=get_the_title( get_option('page_on_front') )?></a></span>
            <span><?php the_title(); ?></span>
        </nav>
        <h2 class="text-center 1100:!text-3xl"><?php the_title(); ?></h2>
    </div>
</section>