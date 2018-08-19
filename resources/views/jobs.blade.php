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
				<h4 style="padding-left: 15px; height: 24px;">職業名</h4>
				<h4>（日本語・英語のどちらでも可）</h4>
				<input id="jobtitle" type="text" name="" placeholder="入力してください">
			</div>
			<div class="col-4 col-12-small">
				<h4 style="height: 24px;"></h4>
				<h4>職業リスト</h4>
				<select id="joblist">
					<option value="">全て選択</option>
					<option value="MLTSSL">MLTSSL(中・長期計画的技術リスト)</option>
					<option value="STSOL">STSOL(短期的職業リスト)</option>
					<option value="Regional">ROL(地方職業リスト)</option>
				</select>
			</div>
			<div class="col-4 col-12-small">
				<h4 style="height: 24px;"></h4>
				<h4>関連するビザ</h4>
				<select id="visas">
					<option value="">全て選択</option>
					@foreach($visas as $key => $visa)
					<option value="{{$key}}">{{$visa}}</option>
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
					<th>関連するビザ</th>
				</tr>
			</thead>
			<tbody class="jobs">
				@foreach($jobs as $i => $job)
				<tr>
					<td class="en_jobtitle">{{$job[1]}}</td>
					<td class="jp_jobtitle">{{$job[0]}}</td>
					<td class="joblist">{{$job[2]}}</td>
					<td class="visas">{{$job[3]}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
@endsection
