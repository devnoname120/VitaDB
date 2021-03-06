<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" ng-controller="home3Controller">
	<div class="row" id="top">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-laptop" aria-hidden="true"></i> &nbsp;
				PC Tools Lister ({{brews.length}} tools available)
			</li>
		</ol>
		<ol class="breadcrumb">
			<div angular-marquee style="overflow: hidden;white-space:nowrap;">
				<span ng-repeat="entry in updates"><span ng-if="$index != 0"> - </span><b>{{entry.author}}</b> {{entry.object}} <b>{{entry.hb}}</b> on <b>{{entry.date}} GMT -1:00</b>.</span>
			</div>
		</ol>
	</div>
	<br>
	<div class="row">
		<iframe ng-if="(!user) || (user.role == 5)" scrolling="no" frameBorder="0" id="uploader" width="100%" height="100px" src="ads.html"></iframe>
		<div class="col-md-4">
			<input style="display:inline-block;vertical-align:middle;" type="text" ng-model="field" class="form-control" placeholder="Search..." required="true" />
		</div>
	</div>
	<br>
	<div class="row" id="hb-list">
		<div ng-repeat="brew in brews | filter: filterBrews(field)" class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-widget ">
				<div class="row no-padding">
					<div class="col-md-12">
						<h4 style="white-space: nowrap;overflow: hidden;"><a href="#/info/{{brew.id}}"><b>{{brew.name}} {{brew.version}}</b></a></h3>
						<h6><span ng-repeat="author in brew.authors">{{ ($first) ? '' : ' & ' }}<a href="#/user/{{author}}">{{author}}</a></span></h6>
						<h5 style="white-space: nowrap;overflow: hidden;">{{brew.description}}</h5>
						<a href="{{brew.url}}"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Download</a>
						&nbsp;
						<a href="#/info/{{brew.id}}"><i class="fa fa-info" aria-hidden="true"></i> Show info</a>
						&nbsp;
						<a ng-if="user && user.role < 5" href="#/edit/{{brew.id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>
					</div>
					<div class="topcorner"><h6 style="text-align: right;">{{brew.date}} &nbsp;<br>{{brew.downloads}} DLs&nbsp;</h6></div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row" id="botbar">
		<h1><a id="go-top" href="" ng-click="goTop()"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a></h1>
	</div>
</div>