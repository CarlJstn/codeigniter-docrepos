<h2><?= $title; ?></h2>

<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-font fa-fw"></i> Text
			</div>
			<div class="panel-body">
				<textarea style="width: 100%; border-radius: 10px;" rows="30" spellcheck="on"> </textarea>
				<button style="float: right; font-size: 20px;" class="btn btn-lg btn-info">Check</button>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-bar-chart-o fa-fw"></i> Result
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col">
						<canvas id="doughnut-chart-result" width="800" height="450"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>