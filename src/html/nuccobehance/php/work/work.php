<?php
	require_once __DIR__ . '/../../../vendor/autoload.php';
	$client = NuccoBrain\Services::getBehanceClient();

    // Query project.
	$result = $client->getProject((int) $_GET['itemId']);

	$content = array(
		'media' => array(),
		'title' => preg_replace('/([^|]+) \| (.+)/', '$1<br/><small>$2</small>', $result->name),
		'description' => "<p>{$result->description}</p>",
		'url'   => $result->url,
	);

	foreach ($result->modules as $module) {
		if ('image' == $module->type) {
			if (!empty($module->sizes->max_1240)) {
				$content['media'][] = array(
					'type' => 'image',
					'src'  => $module->sizes->max_1240,
				);
			}
			else {
				$content['media'][] = array(
					'type' => 'image',
					'src'  => $module->src,
				);
			}
		}
		elseif ('embed' == $module->type) {
			$content['media'][] = array(
				'type'  => 'video',
				'embed' => preg_replace('/(.*)style=\"[^"]*\"(.*)/', '$1 $2', $module->embed),
			);
		}
		elseif ('text' == $module->type) {
			$text = preg_replace('/(<.*)color:[^;]*;(.*>)/U', '$1$2', $module->text);
			$content['media'][] = array(
				'type' => 'text',
				'text' => "<span style=\"color:#000000 !important\">{$text}</span>",
			);
		}
	}

	// Ajax response.
	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
		header('Content-Type: application/json');
		echo json_encode($content);
	}
	// Simple page view.
	else {
		include __DIR__ . '/page.php';
	}
