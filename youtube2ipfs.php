<?php

if (filter_var($_GET['video'], FILTER_VALIDATE_URL) && (parse_url($_GET['video'])['host'] === 'youtube.com')) {
	$tmp = explode('.', microtime(true))[0];
	exec('youtube-dl -g -f best "' . $_GET['video'] . '"', $output);
	exec('wget ' . $output[0] . ' -O ' . realpath(getcwd()) . '/videos/' . $tmp . '.mp4', $output);
	exec('ipfs add ' . realpath(getcwd()) . '/videos/' . $tmp . '.mp4 -Q', $output);
	if ($_GET['json'] === 'true') {
		$arr = array('ipfshash' => $output[0], 'youtubeurl' => $_GET['video']);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($arr);
	} else {
		header('Content-type: text/html; charset=utf-8');
		echo $output[0];
	}
} elseif (filter_var($_POST['video'], FILTER_VALIDATE_URL) && (parse_url($_POST['video'])['host'] === 'youtube.com')) {
	$tmp = explode('.', microtime(true))[0];
	exec('youtube-dl -g -f best "' . $_POST['video'] . '"', $output);
	exec('wget ' . $output[0] . ' -O ' . realpath(getcwd()) . '/videos/' . $tmp . '.mp4', $output);
	exec('ipfs add ' . realpath(getcwd()) . '/videos/' . $tmp . '.mp4 -Q', $output);
	if ($_POST['json'] === 'true') {
		$arr = array('ipfshash' => $output[0], 'youtubeurl' => $_POST['video']);
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($arr);
	} else {
		header('Content-type: text/html; charset=utf-8');
		echo $output[0];
	}
} else {
	header('Content-type: text/html; charset=utf-8');
	echo 'Error: please check the provided information';
}

exit();

?>
