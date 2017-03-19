# dev10.reaged.ru

### Файлы

* [onas] - шаблон страницы о нас
* [index-static-banner] - основная шапка сайта
* [single] - шапка для постов
* [index-portfolio] - Услуги организации
* [index-breadcrumb] - хлебные крошки
* [index-blog] - новости сайта
* [header] - шапка с соц иконками

##### Изменение видео

| Файл |
| ------ |
| index-static-banner.php|

```html
<div id="styled_video_container">
    <video width="100%" height="100%" loop="loop" muted="muted" autoplay="autoplay" poster="/wp-content/uploads/2017/03/one.jpg">
        <source src="/wp-content/uploads/2017/03/razar.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            Тег video не поддерживается вашим браузером. 
    </video>
</div>
```
###### Перед заменой видео удалить старый файл razar.mp4

##### Изменение услуг

| Файл |
| ------ |
| index-portfolio.php|

> Услуги для сайта перед заполнением должны содержать рубрику start
> Категория выборки в файле  index-portfolio.php в секции .row (cat=4)

```php
<?php 
/* cat=4 вывод категории 4 start */
    if ( have_posts() ) : query_posts('cat=4'); 
    while (have_posts()) : the_post();
<?php the_post_thumbnail_url(); ?>
<?php the_title(); ?

<?php the_permalink(); ?>

<?php endwhile; endif; wp_reset_query(); ?>
```

##### Изменение новостей

| Файл |
| ------ |
| index-blog.php|

> Новости для сайта перед заполнением должны содержать рубрику history
> Категория выборки в файле  index-blog.php в секции .row (category_name=history)

```php
		$j=1;
		query_posts( 'category_name=history' );
		if(query_posts( 'category_name=history' ))
		    {while(have_posts()):the_post();
			$recent_expet = get_the_excerpt();
				$defalt_arg =array('class' => "img-responsive");
				if(has_post_thumbnail()): 
					the_post_thumbnail('', $defalt_arg); 
				endif;
				echo get_the_date();
				the_permalink();
				comments_number( 'No Comments', '1 comments', '% comments' );
				the_permalink();
				the_title();		
				echo get_the_excerpt();
                the_permalink(); 
                _e('Read More','wallstreet');						
                if($j%3==0){
                    echo "<div class='clearfix'></div>"; 
                } $j++; endwhile; 
			} else  {
			echo "<div class='post_message'>No Posts to show.</div>";
			} ?>
```

##### Контактные данные

| Файл |
| ------ |
| header.php|

> Блок .container > .head-contact-info

##### Изменение статики
| Файл | Описание |
| ------ |-------|
| function.php|
| default.css| кастомный стиль |
| theme-menu.css| переопределение стиля меню |
| style.css | стиль дочерней темы |

> Перед изменением статики сохранить версию в function.php

```php
	CUSTOM_scripts_method();
```

##### Смена аватар
| Файл | Описание |
| ------ |-------|
| function.php|

```php
	add_default_avatar_option($avatars);
	// '/images/ven12.jpg'
```