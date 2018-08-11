@extends('layout.master')

@section('content')

@include('layout.header')

<script src="js/subpage/jobs.js" type="text/javascript"></script>
<section style="padding-top: 60px;">
	<header class="main">
		<h1 style="font-size: 2em;">{{$post->title}}</h1>
	</header>
	<div class="post_body_div">
		{!!$post->body!!}
		<div class="row gtr-uniform" style="padding-bottom: 60px;">
			<div class="col-4 col-12-small">
				<h4>職業名（日本語・英語のどちらでも可）</h4>
				<input id="jobtitle" type="text" name="" placeholder="入力してください">
			</div>
			<div class="col-4 col-12-small">
				<h4>職業リスト</h4>
				<select id="joblist">
					<option value="">全て選択</option>
					<option value="MLTSSL">MLTSSL(長期就労ビザ)</option>
					<option value="STSOL">STSOL(短期就労ビザ)</option>
					<option value="Regional">ROL(地方就労ビザ)</option>
				</select>
			</div>
			<div class="col-4 col-12-small">
				<h4>ビザ認可団体</h4>
				<select id="authorities">
					<option value="">全て選択</option>
					@foreach($authorities as $authority)
					<option value="{{$authority}}">{{$authority}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<table>
			<thead>
				<tr>
					<th>職業名（原文）</th>
					<th>職業名</th>
					<th>リスト</th>
					<th>ビザ認可団体(Assessing Authority)</th>
				</tr>
			</thead>
			<tbody class="jobs">
				@foreach($jobs as $i => $job)
				<tr>
					<td class="en_jobtitle">{{$job[1]}}</td>
					<td class="jp_jobtitle">{{$job[0]}}</td>
					<td class="joblist">{{$job[2]}}</td>
					<td class="authorities">{{$job[3]}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "{{env('APP_URL').'/'.$post->slug}}";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "{{env('APP_URL').'/'.$post->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://jp-site.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
