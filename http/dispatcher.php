<?php

/**
 * ownCloud - App Framework
 *
 * @author Bernhard Posselt, Thomas Tanghus, Bart Visscher
 * @copyright 2012 Bernhard Posselt nukeawhale@gmail.com
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCA\AppFramework\Http;

use \OCA\AppFramework\Controller\Controller;
use \OCA\AppFramework\MiddlewareDispatcher;


/**
 * Class to dispatch the request to the middleware disptacher
 */
class Dispatcher {

	private $middlewareDispatcher;

	public function __construct(MiddlewareDispatcher $middlewareDispatcher) {
		$this->middlewareDispatcher = $middlewareDispatcher;
	}


	/**
	 * Handles a request and calls the dispatcher on the controller
	 */
	public function dispatch(Controller $controller, $methodName) {
		$response = array()

		return $resonse;
	}


}