<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="description" content="pure, fast and searchable soccer statistics.">

	<script defer data-domain="native-stats.org" src="https://plausible.io/js/plausible.js"></script>

	<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" />
	<title>native-stats. pure, fast and searchable soccer statistics.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/assets/main-4d423ceed2c42d4c6f8b4fd0244454fd.css" />

	<meta name="layout" content="main" />

</head>

<body class="has-navbar-fixed-top">

	<nav class="navbar is-fixed-top is-black" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-item" href="https://native-stats.org">
				native-stats.<span class="navbar-brandsub">pure. fast. searchable.</span>
			</a>
			<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-items">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
			</a>
		</div>

		<div id="navbar-items" class="navbar-menu">

			<div class="navbar-start">

			</div>

			<div class="navbar-end">
				<a href="/about" class="navbar-item">
					About
				</a>

				<div class="navbar-item">
					<div class="buttons">

						<a href="/sso/login" class="button is-small login">
							<strong>Login</strong>
						</a>

					</div>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">


		<div class="row mt-10">
			<div x-data="{ show_match_table: true }" id="matches" class="">
				<div x-show="!show_match_table" class="loading-container">
					<span class="loading"></span>
				</div>

				<div x-show="show_match_table" class="row">
					<div id="match_table" class="col-sm-12">
						380 matches in selection:
						<table class="table is-narrow is-striped is-hoverable matches">
							<thead>
								<tr>
									<th>Date</th>
									<th>MD</th>
									<th></th>
									<th>Fixture</th>
									<th class="xls-only">Odds (1/x/2)</th>
									<th>Score</th>
								</tr>
							</thead>
							<tbody>

								<tr @click="show_match_table = false; location.href = '/matches/33301'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">13.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.57 / 3.13 / 2.80
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33305'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">14.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.06 / 3.41 / 2.24
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33304'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">14.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.71 / 3.30 / 2.53
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33303'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">14.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.28 / 3.28 / 3.17
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33308'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">14.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										6.71 / 4.55 / 1.43
									</td>
									</td>
									<td class="score">

										1:4

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33306'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">15.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										4.58 / 3.59 / 1.75
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33307'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">15.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.42 / 4.76 / 6.46
									</td>
									</td>
									<td class="score">

										4:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33302'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">15.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.43 / 4.32 / 7.78
									</td>
									</td>
									<td class="score">

										3:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33300'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">16.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.49 / 4.23 / 6.32
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33299'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">16.08.21</span>

									</td>
									<td class="matchday">1</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.62 / 3.32 / 2.04
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33315'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">20.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.84 / 3.62 / 5.05
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33318'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.25 / 3.22 / 3.84
									</td>
									</td>
									<td class="score">

										0:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33312'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.62 / 3.30 / 2.28
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33313'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.42 / 3.32 / 3.32
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33317'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										5.45 / 4.34 / 1.66
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33309'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.52 / 4.56 / 7.10
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33316'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.23 / 6.40 / 21.00
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33311'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										5.35 / 4.76 / 1.62
									</td>
									</td>
									<td class="score">

										3:3

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33314'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">23.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.72 / 3.11 / 2.34
									</td>
									</td>
									<td class="score">

										0:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33310'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">23.08.21</span>

									</td>
									<td class="matchday">2</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.65 / 3.32 / 2.96
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33324'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">27.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.43 / 2.98 / 3.19
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33321'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">27.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.90 / 3.48 / 4.02
									</td>
									</td>
									<td class="score">

										3:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33325'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">28.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.39 / 3.21 / 3.01
									</td>
									</td>
									<td class="score">

										0:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33319'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">28.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										6.01 / 3.88 / 1.57
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33322'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">28.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.46 / 4.41 / 6.61
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33326'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">28.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										4.18 / 3.86 / 1.78
									</td>
									</td>
									<td class="score">

										0:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33327'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">29.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.32 / 5.31 / 8.91
									</td>
									</td>
									<td class="score">

										2:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33323'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">29.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.95 / 2.99 / 2.57
									</td>
									</td>
									<td class="score">

										2:3

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33320'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">29.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.49 / 3.17 / 2.91
									</td>
									</td>
									<td class="score">

										4:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33328'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">29.08.21</span>

									</td>
									<td class="matchday">3</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.79 / 3.41 / 4.77
									</td>
									</td>
									<td class="score">

										2:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33333'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">11.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.87 / 3.56 / 4.18
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33329'"
									class="match_row">
									<td class="datetime">


										<span class="tag status-tag is-danger">POSTPONED</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.53 / 4.13 / 5.99
									</td>
									</td>
									<td class="score">

										:

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33338'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">11.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.86 / 3.38 / 4.39
									</td>
									</td>
									<td class="score">

										2:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33330'"
									class="match_row">
									<td class="datetime">


										<span class="tag status-tag is-danger">POSTPONED</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.03 / 3.62 / 2.20
									</td>
									</td>
									<td class="score">

										:

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33334'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">12.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										4.30 / 3.30 / 1.90
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33332'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">12.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.52 / 3.24 / 2.81
									</td>
									</td>
									<td class="score">

										1:4

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33336'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">12.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										5.91 / 3.78 / 1.59
									</td>
									</td>
									<td class="score">

										0:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33331'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">12.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.38 / 4.92 / 7.31
									</td>
									</td>
									<td class="score">

										5:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33337'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">13.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.74 / 3.47 / 5.04
									</td>
									</td>
									<td class="score">

										0:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33335'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">13.09.21</span>

									</td>
									<td class="matchday">4</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.16 / 3.25 / 2.28
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33344'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">17.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.75 / 3.61 / 4.70
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33340'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">18.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.87 / 3.05 / 2.59
									</td>
									</td>
									<td class="score">

										3:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33347'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">18.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.58 / 3.80 / 6.05
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33339'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">18.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.79 / 3.14 / 2.59
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33348'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">18.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.84 / 3.07 / 2.61
									</td>
									</td>
									<td class="score">

										0:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33343'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">19.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.37 / 3.22 / 2.22
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33342'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">19.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.67 / 3.17 / 2.68
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33345'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">19.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.90 / 3.54 / 3.98
									</td>
									</td>
									<td class="score">

										2:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33341'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">19.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										4.32 / 3.77 / 1.77
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33346'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">20.09.21</span>

									</td>
									<td class="matchday">5</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.25 / 6.03 / 10.72
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33357'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										5.03 / 3.36 / 1.78
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33358'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.77 / 3.62 / 4.60
									</td>
									</td>
									<td class="score">

										1:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33353'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">21.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.53 / 3.30 / 2.77
									</td>
									</td>
									<td class="score">

										0:2

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33350'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.65 / 3.80 / 5.26
									</td>
									</td>
									<td class="score">

										3:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33354'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.85 / 3.38 / 4.46
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33351'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.24 / 6.09 / 11.86
									</td>
									</td>
									<td class="score">

										6:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33349'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">22.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.47 / 4.24 / 6.88
									</td>
									</td>
									<td class="score">

										4:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33355'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">23.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.88 / 3.43 / 1.96
									</td>
									</td>
									<td class="score">

										2:3

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33352'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">23.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.52 / 3.24 / 2.81
									</td>
									</td>
									<td class="score">

										1:3

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33356'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">23.09.21</span>

									</td>
									<td class="matchday">6</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										6.50 / 4.79 / 1.43
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33368'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">25.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										6.37 / 3.71 / 1.58
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33360'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">25.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.43 / 3.22 / 2.96
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33361'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">25.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.76 / 3.58 / 4.70
									</td>
									</td>
									<td class="score">

										2:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33363'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">25.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.54 / 4.41 / 5.44
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33364'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">26.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.84 / 3.07 / 2.62
									</td>
									</td>
									<td class="score">

										2:3

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33367'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">26.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.34 / 5.34 / 7.95
									</td>
									</td>
									<td class="score">

										3:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33362'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">26.09.21</span>
										<span class="match_date sm-only">26.09.</span>
										<span class="match_time">18h30</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.40 / 4.47 / 8.07
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33359'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">26.09.21</span>
										<span class="match_date sm-only">26.09.</span>
										<span class="match_time">18h30</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.65 / 3.75 / 5.32
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33366'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">26.09.21</span>
										<span class="match_date sm-only">26.09.</span>
										<span class="match_time">21h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.97 / 3.41 / 3.88
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33365'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">27.09.21</span>

									</td>
									<td class="matchday">7</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.62 / 3.98 / 5.25
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33378'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">01.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.63 / 3.82 / 5.50
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33371'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">02.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.27 / 3.22 / 3.26
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33376'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">02.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.28 / 3.26 / 3.20
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33374'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">02.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.47 / 3.23 / 2.18
									</td>
									</td>
									<td class="score">

										0:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33377'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">02.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.17 / 3.30 / 3.41
									</td>
									</td>
									<td class="score">

										2:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33369'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">03.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.33 / 3.32 / 2.20
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33372'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">03.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										5.05 / 4.03 / 1.64
									</td>
									</td>
									<td class="score">

										2:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33375'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">03.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										3.73 / 3.08 / 2.14
									</td>
									</td>
									<td class="score">

										1:1

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33370'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">03.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										2.06 / 3.52 / 3.47
									</td>
									</td>
									<td class="score">

										2:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33373'"
									class="match_row">
									<td class="datetime">


										<span class="tag is-info status-tag">FINISHED</span>
										<span class="match_date ls-only">03.10.21</span>

									</td>
									<td class="matchday">8</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										4.63 / 3.49 / 1.80
									</td>
									</td>
									<td class="score">

										1:0

									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33381'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">16.10.21</span>
										<span class="match_date sm-only">16.10.</span>
										<span class="match_time">21h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33380'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">14h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33386'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">16h15</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33379'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">18h30</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33383'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">18h30</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33385'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33382'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.49 / 4.38 / 6.00
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33387'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.10.21</span>
										<span class="match_date sm-only">17.10.</span>
										<span class="match_time">21h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										1.38 / 4.81 / 7.58
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33388'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">18.10.21</span>
										<span class="match_date sm-only">18.10.</span>
										<span class="match_time">19h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33384'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">18.10.21</span>
										<span class="match_date sm-only">18.10.</span>
										<span class="match_time">21h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">9</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33395'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">16h15</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33394'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33389'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33390'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33391'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33392'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33393'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33396'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33397'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33398'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">24.10.21</span>
										<span class="match_date sm-only">24.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">10</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33399'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33400'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33401'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33402'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33403'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33404'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33405'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33406'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33407'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33408'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.10.21</span>
										<span class="match_date sm-only">27.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">11</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33409'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33410'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33411'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33412'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33413'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33414'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33415'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33416'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33417'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33418'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">31.10.21</span>
										<span class="match_date sm-only">31.10.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">12</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33419'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33420'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33421'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33422'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33423'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33424'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33425'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33426'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33427'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33428'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">07.11.21</span>
										<span class="match_date sm-only">07.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">13</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33429'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33430'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33431'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33432'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33433'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33434'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33435'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33436'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33437'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33438'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">21.11.21</span>
										<span class="match_date sm-only">21.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">14</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33439'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33440'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33441'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33442'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33443'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33444'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33445'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33446'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33447'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33448'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">28.11.21</span>
										<span class="match_date sm-only">28.11.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">15</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33449'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33450'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33451'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33452'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33453'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33454'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33455'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33456'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33457'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33458'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">05.12.21</span>
										<span class="match_date sm-only">05.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">16</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33459'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33460'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33461'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33462'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33463'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33464'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33465'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33466'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33467'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33468'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">12.12.21</span>
										<span class="match_date sm-only">12.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">17</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33469'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33470'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33471'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33472'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33473'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33474'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33475'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33476'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33477'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33478'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.12.21</span>
										<span class="match_date sm-only">19.12.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">18</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33479'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33480'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33481'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33482'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33483'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33484'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33485'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33486'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33487'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33488'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">02.01.22</span>
										<span class="match_date sm-only">02.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">19</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33489'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33490'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33491'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33492'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33493'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33494'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33495'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33496'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33497'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33498'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">09.01.22</span>
										<span class="match_date sm-only">09.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">20</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33499'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33500'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33501'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33502'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33503'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33504'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33505'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33506'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33507'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33508'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">19.01.22</span>
										<span class="match_date sm-only">19.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">21</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33509'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33510'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33511'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33512'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33513'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33514'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33515'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33516'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33517'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33518'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">23.01.22</span>
										<span class="match_date sm-only">23.01.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">22</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33519'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33520'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33521'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33522'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33523'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33524'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33525'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33526'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33527'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33528'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.02.22</span>
										<span class="match_date sm-only">06.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">23</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33529'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33530'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33531'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33532'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33533'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33534'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33535'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33536'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33537'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33538'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.02.22</span>
										<span class="match_date sm-only">13.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">24</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33539'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33540'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33541'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33542'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33543'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33544'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33545'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33546'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33547'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33548'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.02.22</span>
										<span class="match_date sm-only">20.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">25</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33549'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33550'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33551'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33552'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33553'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33554'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33555'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33556'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33557'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33558'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">27.02.22</span>
										<span class="match_date sm-only">27.02.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">26</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33559'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33560'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33561'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33562'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33563'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33564'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33565'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33566'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33567'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33568'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">06.03.22</span>
										<span class="match_date sm-only">06.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">27</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33569'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33570'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33571'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33572'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33573'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33574'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33575'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33576'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33577'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33578'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">13.03.22</span>
										<span class="match_date sm-only">13.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">28</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33579'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33580'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33581'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33582'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33583'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33584'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33585'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33586'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33587'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33588'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.03.22</span>
										<span class="match_date sm-only">20.03.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">29</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33589'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33590'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33591'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33592'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33593'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33594'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33595'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33596'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33597'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33598'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">03.04.22</span>
										<span class="match_date sm-only">03.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">30</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33599'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33600'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33601'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33602'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33603'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33604'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33605'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33606'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33607'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33608'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">10.04.22</span>
										<span class="match_date sm-only">10.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">31</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33609'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33610'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33611'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33612'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33613'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33614'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33615'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33616'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33617'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33618'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">17.04.22</span>
										<span class="match_date sm-only">17.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">32</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33619'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33620'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33621'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33622'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33623'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33624'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33625'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33626'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33627'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33628'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">20.04.22</span>
										<span class="match_date sm-only">20.04.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">33</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33629'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33630'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33631'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33632'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33633'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33634'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33635'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33636'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33637'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33638'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">01.05.22</span>
										<span class="match_date sm-only">01.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">34</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33639'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33640'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33641'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33642'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33643'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33644'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33645'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33646'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33647'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33648'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">08.05.22</span>
										<span class="match_date sm-only">08.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">35</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33649'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33650'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33651'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33652'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33653'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33654'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33655'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33656'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33657'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33658'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">11.05.22</span>
										<span class="match_date sm-only">11.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">36</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33659'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33660'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33661'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33662'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33663'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33664'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33665'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33666'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33667'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33668'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">15.05.22</span>
										<span class="match_date sm-only">15.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">37</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33669'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/285.svg" /><span class="ls-only">&nbsp;Elche</span><span class="sm-only">&nbsp;ELC</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/82.svg" /><span class="ls-only">&nbsp;Getafe</span><span class="sm-only">&nbsp;GET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33670'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/87.svg" /><span class="ls-only">&nbsp;Rayo Vallecano</span><span class="sm-only">&nbsp;RAY</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/88.svg" /><span class="ls-only">&nbsp;Levante</span><span class="sm-only">&nbsp;LEV</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33671'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/95.svg" /><span class="ls-only">&nbsp;Valencia</span><span class="sm-only">&nbsp;VAL</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/558.svg" /><span class="ls-only">&nbsp;Celta</span><span class="sm-only">&nbsp;CEL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33672'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/559.svg" /><span class="ls-only">&nbsp;Sevilla FC</span><span class="sm-only">&nbsp;SEV</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/77.svg" /><span class="ls-only">&nbsp;Athletic</span><span class="sm-only">&nbsp;ATH</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33673'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/92.svg" /><span class="ls-only">&nbsp;Real Sociedad</span><span class="sm-only">&nbsp;RSO</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/78.svg" /><span class="ls-only">&nbsp;Atleti</span><span class="sm-only">&nbsp;ATM</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33674'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/86.svg" /><span class="ls-only">&nbsp;Real Madrid</span><span class="sm-only">&nbsp;RMA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/90.svg" /><span class="ls-only">&nbsp;Real Betis</span><span class="sm-only">&nbsp;BET</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33675'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/79.svg" /><span class="ls-only">&nbsp;Osasuna</span><span class="sm-only">&nbsp;OSA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/89.svg" /><span class="ls-only">&nbsp;Mallorca</span><span class="sm-only">&nbsp;MAL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33676'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/83.svg" /><span class="ls-only">&nbsp;Granada</span><span class="sm-only">&nbsp;GRA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/80.svg" /><span class="ls-only">&nbsp;Espanyol</span><span class="sm-only">&nbsp;ESP</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33677'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="Primera Division">
										<img class="flag_matchview" src="/assets/flags/ESP.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/81.svg" /><span class="ls-only">&nbsp;Barça</span><span class="sm-only">&nbsp;FCB</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/94.svg" /><span class="ls-only">&nbsp;Villarreal</span><span class="sm-only">&nbsp;VIL</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

								<tr @click="show_match_table = false; location.href = '/matches/33678'"
									class="match_row">
									<td class="datetime">

										<span class="match_date ls-only">22.05.22</span>
										<span class="match_date sm-only">22.05.</span>
										<span class="match_time">20h00</span>


										<span class="ls-only"><span class="tag status-tag is-info is-rounded">SCHEDULED</span></span>

									</td>
									<td class="matchday">38</td>
									<td data-toggle="tooltip" data-placement="top" title="">
										<img class="flag_matchview" src="/assets/flags/.svg" />
                        &nbsp;</td>
									<td class="fixture">
										<span class="homeTeam">
                            <img class="flag_matchview" src="https://crests.football-data.org/263.svg" /><span class="ls-only">&nbsp;Alavés</span><span class="sm-only">&nbsp;ALA</span>
										</span>
										<span class="awayTeam">
                            <span class="ls-only"> vs. </span>
										<span class="sm-only">-</span>
										<img class="flag_matchview" src="https://crests.football-data.org/264.svg" /><span class="ls-only">&nbsp;Cádiz CF</span><span class="sm-only">&nbsp;CAD</span>
										</span>
									</td>
									<td class="odds xls-only">
										/ /
									</td>
									</td>
									<td class="score">
										-:-
									</td>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>


	</div>

	<footer class="footer p-0">
		<div class="content has-text-centered">
			For the &#128154; of the game. | 2021
		</div>
	</footer>

	<script type="text/javascript" src="/assets/application-1a4a1db089cad2a8c5cba351044da2c9.js"></script>
</body>

</html>