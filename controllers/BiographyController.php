<?php

 include_once ROOT . '/models/Biography.php';

class BiographyController
{

		public function actionView($biographyId)
		{

			$biography = Biography::getBiographyById($biographyId);

			require_once(ROOT . '/views/biography/view.php');

			return true;
		}


}