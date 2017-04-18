{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:webfeeds="http://webfeeds.org/rss/1.0" xmlns:media="http://search.yahoo.com/mrss/"<?php foreach ($namespaces as $n) {
    echo " ".$n;
} ?>>
    <channel>
        <title>{!! $channel['title'] !!}</title>
        <link>{{ $channel['rssLink'] }}</link>
        <description><![CDATA[{!! $channel['description'] !!}]]></description>
        <atom:link href="{{ $channel['link'] }}" rel="{{ $channel['ref'] }}"></atom:link>
        @if (!empty($channel['copyright']))
        <copyright>{{ $channel['copyright'] }}</copyright>
        @endif
        @if (!empty($channel['color']))
        <webfeeds:accentColor>{{ $channel['color'] }}</webfeeds:accentColor>
        @endif
        @if (!empty($channel['cover']))
        <webfeeds:cover image="{{ $channel['cover'] }}">
        @endif
        @if (!empty($channel['icon']))
        <webfeeds:icon>{{ $channel['icon'] }}</webfeeds:icon>
        @endif
        @if (!empty($channel['logo']))
        <webfeeds:logo>{{ $channel['logo'] }}</webfeeds:logo>
        <image>
            <url>{{ $channel['logo'] }}</url>
            <title>{{ $channel['title'] }}</title>
            <link>{{ $channel['rssLink'] }}</link>
        </image>
        @endif
        @if (!empty($channel['related']))
        <webfeeds:related layout="card" target="browser">
        @endif
        @if (!empty($channel['ga']))
        <webfeeds:analytics id="{{ $channel['ga'] }}" engine="GoogleAnalytics">
        @endif
        <language>{{ $channel['lang'] }}</language>
        <lastBuildDate>{{ $channel['pubdate'] }}</lastBuildDate>
        @foreach($items as $item)
        <item>
            <title><![CDATA[{!! $item['title'] !!}]]></title>
            @if (!empty($item['category']))
            <category>{{ $item['category'] }}</category>
            @endif
            <link>{{ $item['link'] }}</link>
            <guid isPermaLink="true">{{ $item['link'] }}</guid>
            <description><![CDATA[{!! $item['description'] !!}]]></description>
            @if (!empty($item['content']))
            <content:encoded><![CDATA[{!! $item['content'] !!}]]></content:encoded>
            @endif
            <dc:creator xmlns:dc="http://purl.org/dc/elements/1.1/">{!! $item['author'] !!}</dc:creator>
            <pubDate>{{ $item['pubdate'] }}</pubDate>
            @if (!empty($item['enclosure']))
            <enclosure
            @foreach ($item['enclosure'] as $k => $v)
            {!! $k.'="'.$v.'" ' !!}
            @endforeach
            />
            @endif
			@if (!empty($item['media']))
				@foreach($item['media'] as $key => $value)
		            @if ($key=='content' && !empty($value))
		            <media:content
		            @foreach ($value as $k => $v)
		            {!! $k.'="'.$v.'" ' !!}
		            @endforeach
		            />
		            @endif
		           @if ($key=='thumbnail' && !empty($value))
		            <media:thumbnail
		            @foreach ($value as $k => $v)
		            {!! $k.'="'.$v.'" ' !!}
		            @endforeach
		            />
		            @endif
		           @if ($key=='title' && !empty($value))
		            <media:title type="plain">{{ $value }}</media:title>
		            @endif
		            @if ($key=='description' && !empty($value))
		            <media:description type="plain">{{ $value }}</media:description>
		            @endif
		            @if ($key=='keywords' && !empty($value))
		            <media:keywords>{{ $value }}</media:keywords>
		            @endif
		             @if ($key=='rating' && !empty($value))
		            <media:rating>{{ $value }}</media:rating>
		            @endif
				@endforeach
			@endif
            @if (!empty($item['creativeCommons']))
				@if ($key=='license' && !empty($value))
            	<creativeCommons:license>{{ $value }}</creativeCommons:license>
				@endif
            @endif
        </item>
        @endforeach
    </channel>
</rss>
