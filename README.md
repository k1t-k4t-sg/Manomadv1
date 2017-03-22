# dev10.reaged.ru

## Описание

#### Отзывы (Последовательность действий)
1. Открыть вкладку (Testimonials > Add New Testimonial) в админ панель
2. Заполнить поле "введите заголовок", "основную текстовую область", "Client Name", "E-Mail Address"
3. Загрузить изображение записи разрешением 150 x 150
4. Нажать Опубликовать

#### Изменить Email адрес (Последовательность действий)
1. Открыть вкладку (Настройки) в админ панель
2. Поле "Адрес e-mail" Изменить

#### Опубликовать слайдер (Последовательность действий)
1. Открыть вкладку (meta slider) в админ панель
2. Нажать на вкладку добавить слайд или ( + ) если добавить новый слайдер
3. Выбрать изображение
4. Нажать Сохранить
5. Скопировать shortcode
6. Открыть страницу с постом, добавить скопированный shortcode на страницу

#### Опубликовать видео (Последовательность действий)
1. Открыть вкладку (Страница > Видео ) в админ панель
2. Загрузить видео на youtube (подробнее: https://support.google.com/youtube/answer/57407?co=GENIE.Platform=Desktop&hl=ru)
3. На сайте youtube скопировать html код, (подробнее: https://support.google.com/youtube/answer/171780?hl=ru)
4. Скопированный код внести в запись странице (видео)

## Файлы

* [onas] - шаблон страницы о нас
* [index-static-banner] - основная шапка сайта
* [single] - шапка для постов
* [index-portfolio] - Услуги организации
* [index-breadcrumb] - хлебные крошки
* [index-blog] - новости сайта
* [header] - шапка с соц иконками

#### Изменение видео

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

#### Изменение услуг

| Файл |
| ------ |
| index-portfolio.php|
| function.php|

> Услуги для сайта перед заполнением должны содержать рубрику start
> Категория выборки в файле  index-portfolio.php в секции .row (cat=4)
> Размер миниатюры 300x225
> Cокрощение предложение в function.php

```php
//function.php
add_filter('excerpt_more', function($more) {
	return '...';
});
```

```php
// index-portfolio.php 
// cat=4 вывод категории 4 start
if ( have_posts() ) : query_posts('cat=4'); 
    while (have_posts()) : the_post();
    $field = get_post_field( 'post_content', get_the_ID(), 'db' );
    echo do_shortcode($field);
    the_post_thumbnail_url();
    the_title(); 

    the_permalink(); 

endwhile; 
endif; 
wp_reset_query(); 
```

#### Изменение новостей

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

#### Контактные данные

| Файл |
| ------ |
| header.php|

> Блок .container > .head-contact-info

#### Изменение статики
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

#### Смена аватар
| Файл | Описание |
| ------ |-------|
| function.php|

> Смена аватар применяется к всем комментариям

```php
	add_default_avatar_option($avatars);
	// '/images/ven12.jpg'
```


#### Изменение блока Владельцы
| Файл | Описание |
| ------ |-------|
| o-nas.php|

> Изменение блока Владельцы расположено в блоке .aftor
###### Перед заменой картинок удалить старые файлы free.jpg и two.jpg

```html
	<div class="aftor">
        <div class="muz">
            <img src="/wp-content/uploads/2017/03/free.jpg"><br>
            <div>
                <h4>Имя</h4>
                <p>Описание</p>
            </div>
        </div>
        <div class="dzen">
            <img src="/wp-content/uploads/2017/03/two.jpg"><br>
            <div>
                <h4>Имя</h4>
                <p>Описание</p>
            </div>
        </div>
    </div>
```

#### Плагины
| Plugin |  |
| ------ | ------ |
| [Easy Testimonials] | Статически добавлять комментарий
| [Contact Form 7] | Контактная форма, подписка и т.д
| [Comment Images Reloaded] | Загрузка картинок в кометах
| [Meta Slider] |  Слайдер картинок