@props([
    'imgSize' => 'is-4by3',
    'imgSrc' => 'https://bulma.io/images/placeholders/1280x960.png',
    'imgAlt' => 'Placeholder image',
    'mediaImgSize' => 'is-48x48',
    'mediaImgSrc' => 'https://bulma.io/images/placeholders/96x96.png',
    'mediaImgAlt' => 'Media Placeholder',
    'title',
    'subtitle',
    'media',
    'content'
])

@php
    $imgAttributes = $attributes->thatStartWith('img-');
    $mediaAttributes = $media->attributes;
    $attributes = $attributes->whereDoesntStartWith('img-');
@endphp

<div {{ $attributes->merge(['class' => 'card']) }}>
    <div class="card-image">
        <figure @class([$imgAttributes->has('img-class') => $imgAttributes->get('img-class'),'image',$imgAttributes->has('img-size') ? $imgAttributes->get('img-size') : $imgSize])>
            <img src="{{ $imgAttributes->has('img-src') ? $imgAttributes->get('img-src') : $imgSrc }}"
                 alt="{{ $imgAttributes->has('img-alt') ? $imgAttributes->get('img-alt') : $imgAlt }}">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure @class(['image', $mediaAttributes->has('media-img-size') ? $mediaAttributes->get('media-img-size') : $mediaImgSize])>
                    <img src="{{ $mediaAttributes->has('media-img-src') ? $mediaAttributes->get('media-img-src') : $mediaImgSrc }}"
                         alt="{{ $mediaAttributes->has('media-img-alt') ? $mediaAttributes->get('media-img-alt') : $mediaImgAlt }}">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">{{ $title }}</p>
                <p class="subtitle is-6">{{ $subtitle }}</p>
            </div>
        </div>

        <div class="content">
            {{ $content }}
        </div>
    </div>
</div>
