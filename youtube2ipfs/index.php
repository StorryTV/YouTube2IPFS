<?php

//Default IPFS below can be changed to your own IPFS node
//$ipfsapi = array(
//	'protocol' => 'http',
//	'host' => '127.0.0.1',
//	'port' => '5001',
//);
$ipfsapi = array(
	'protocol' => 'https',
	'host' => 'ipfs.infura.io',
	'port' => '5001',
);
$max_filesize = '100m';

if (filter_var($_GET['video'], FILTER_VALIDATE_URL) &&
	((parse_url($_GET['video'])['host'] === 'www.youtube.com') ||
	(parse_url($_GET['video'])['host'] === 'youtube.com'))) {
	$video = $_GET['video'];
	$json_ = $_GET['json'];
	$hashes = file_get_contents(realpath(getcwd()) . '/hashes/.ipfs');
	if (json_decode($hashes, TRUE)[$video]) {
		$ipfsHash = json_decode($hashes, TRUE)[$video];
		if ($json_ === 'true') {
			$arr = array(
				'Url' => $video,
				'Hash' => $ipfsHash,
			);
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($arr);
		} else {
			header('Content-type: text/html; charset=utf-8');
			echo $ipfsHash;
		}
	} else {
		$tmp = explode('.', microtime(true))[0];
		if (!file_exists(realpath(getcwd()) . '/hashes')) {
			mkdir(realpath(getcwd()) . '/hashes', 0760);
		}
		exec('youtube-dl -f best -q "' . $video . '" -o ' . realpath(getcwd()) . '/videos/' . $tmp . '.tmp --max-filesize ' . $max_filesize . ' 2>&1');
		if (!file_exists(realpath(getcwd()) . '/hashes')) {
			mkdir(realpath(getcwd()) . '/hashes', 0760);
		}
		exec('curl "' . $ipfsapi['protocol'] . '://' . $ipfsapi['host'] . ':' . $ipfsapi['port'] . '/api/v0/add?stream-channels=true&recursive=false&pin=true&wrap-with-directory=false&progress=false" \
			-X POST \
			-H "Content-Type: multipart/form-data" \
			-F file=@"' . realpath(getcwd()) . '/videos/' . $tmp . '.tmp"', $output, $ipfs_upload);
		$ipfs = json_decode($output[0], TRUE);
		$arr = array($video => $ipfs['Hash']);
		file_put_contents(realpath(getcwd()) . '/hashes/.ipfs', json_encode($arr), FILE_APPEND);
		if ($ipfs['Size'] === null) {
			$error = 'size';
		} else {
			$error = false;
		}
		if ($json_ === 'true') {
			$arr = array(
				'Url' => $video,
				'Hash' => $ipfs['Hash'],
				'Size' => $ipfs['Size'],
				'Error' => $error,
			);
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($arr);
		} else {
			header('Content-type: text/html; charset=utf-8');
			echo $ipfs['Hash'];
		}
	}
	unlink(realpath(getcwd()) . '/videos/' . $tmp . '.tmp');
} elseif (filter_var($_POST['video'], FILTER_VALIDATE_URL) &&
	((parse_url($_POST['video'])['host'] === 'www.youtube.com') ||
	(parse_url($_POST['video'])['host'] === 'youtube.com'))) {
	$video = $_POST['video'];
	$json_ = $_POST['json'];
	$hashes = file_get_contents(realpath(getcwd()) . '/hashes/.ipfs');
	if (json_decode($hashes, TRUE)[$video]) {
		$ipfsHash = json_decode($hashes, TRUE)[$video];
		if ($json_ === 'true') {
			$arr = array(
				'Url' => $video,
				'Hash' => $ipfsHash,
			);
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($arr);
		} else {
			header('Content-type: text/html; charset=utf-8');
			echo $ipfsHash;
		}
	} else {
		$tmp = explode('.', microtime(true))[0];
		if (!file_exists(realpath(getcwd()) . '/hashes')) {
			mkdir(realpath(getcwd()) . '/hashes', 0760);
		}
		exec('youtube-dl -f best -q "' . $video . '" -o ' . realpath(getcwd()) . '/videos/' . $tmp . '.tmp --max-filesize ' . $max_filesize . ' 2>&1');
		if (!file_exists(realpath(getcwd()) . '/hashes')) {
			mkdir(realpath(getcwd()) . '/hashes', 0760);
		}
		exec('curl "' . $ipfsapi['protocol'] . '://' . $ipfsapi['host'] . ':' . $ipfsapi['port'] . '/api/v0/add?stream-channels=true&recursive=false&pin=true&wrap-with-directory=false&progress=false" \
			-X POST \
			-H "Content-Type: multipart/form-data" \
			-F file=@"' . realpath(getcwd()) . '/videos/' . $tmp . '.tmp"', $output, $ipfs_upload);
		$ipfs = json_decode($output[0], TRUE);
		$arr = array($video => $ipfs['Hash']);
		file_put_contents(realpath(getcwd()) . '/hashes/.ipfs', json_encode($arr), FILE_APPEND);
		if ($ipfs['Size'] === null) {
			$error = 'size';
		} else {
			$error = false;
		}
		if ($json_ === 'true') {
			$arr = array(
				'Url' => $video,
				'Hash' => $ipfs['Hash'],
				'Size' => $ipfs['Size'],
				'Error' => $error,
			);
			header('Content-type: application/json; charset=utf-8');
			echo json_encode($arr);
		} else {
			header('Content-type: text/html; charset=utf-8');
			echo $ipfs['Hash'];
		}
	}
	unlink(realpath(getcwd()) . '/videos/' . $tmp . '.tmp');
} else {
	header('Content-type: text/html; charset=utf-8');
	echo 'Error: please check the provided information';
}

exit();

?>

