<?php
	require_once __DIR__ . '/../../../vendor/autoload.php';
	$client = NuccoBrain\Services::getBehanceClient();

    // Query project.
	$result = $client->getProject((int) $_GET['itemId']);
	header('Content-Type: application/json');

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
            $content['media'][] = array(
                'type' => 'text',
                'text' => "<span style=\"color:#666666 !important\">{$module->text}</span>",
            );
        }
	}

	echo json_encode($content);
