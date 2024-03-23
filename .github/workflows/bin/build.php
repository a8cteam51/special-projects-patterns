<?php

	$meta_files = glob('*/metadata.json', GLOB_BRACE);
	foreach ( $meta_files as $meta_file ) {
		$meta = json_decode(file_get_contents($meta_file), true);
		$path = dirname($meta_file);
		$slug = basename($path);
		$data['categories'][$slug] = $meta;
	}

	// Read all other JSON files
	$json_files = glob('*/*.json', GLOB_BRACE);
	foreach ( $json_files as $json_file ) {
		if ( basename($json_file) == 'metadata.json' ) {
			continue;
		}
		$meta = json_decode(file_get_contents($json_file), true);
		$path = dirname($json_file);
		$slug = basename($json_file, '.json');
		$data['patterns'][$path]['items'][$slug] = $meta;
	}

	echo json_encode($data);