<?php
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;
	

	$app = new \Slim\App;
	

	$app->options('/{routes:.+}', function ($request, $response, $args) {
	    return $response;
	});
	

	$app->add(function ($req, $res, $next) {
	    $response = $next($req, $res);
	    return $response
	            ->withHeader('Access-Control-Allow-Origin', '*')
	            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
	            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
	});
	

	// Get All estudiantes
	$app->get('/api/ estudiantes, function(Request $request, Response $response){
	    $sql = "SELECT * FROM estudiantes ";
	

	    try{
	        // Get DB Object
	        $db = new db();
	        // Connect
	        $db = $db->connect();
	

	        $stmt = $db->query($sql);
	        $ estudiantes = $stmt->fetchAll(PDO::FETCH_OBJ);
	        $db = null;
	        echo json_encode($estudiantes);
	    } catch(PDOException $e){
	        echo '{"error": {"text": '.$e->getMessage().'}';
	    }
	});
	

	// Get Single estudiantes
	$app->get('/api/ estudiantes /{ codigo }', function(Request $request, Response $response){
	    $ codigo = $request->getAttribute(' codigo ');
	

	    $sql = "SELECT * FROM estudiantes WHERE codigo = $ codigo";
	

	    try{
	        // Get DB Object
	        $db = new db();
	        // Connect
	        $db = $db->connect();
	

	        $stmt = $db->query($sql);
	        $ estudiantes = $stmt->fetch(PDO::FETCH_OBJ);
	        $db = null;
	        echo json_encode($estudiantes);
	    } catch(PDOException $e){
	        echo '{"error": {"text": '.$e->getMessage().'}';
	    }
	});
	

	// Add estudiantes
	$app->post('/api/ estudiantes /add', function(Request $request, Response $response){
	    $nombre = $request->getParam('nombre');
	    $apellido = $request->getParam('apellido');
	    $telefono = $request->getParam('telefono');
	    $correo = $request->getParam('correo');
	    $direccion = $request->getParam('direccion');
	    $ciudad = $request->getParam('ciudad');
	    $carrera = $request->getParam('carrera');
	

	    $sql = "INSERT INTO estudiantes (nombre,apellido,telefono,correo,direccion,ciudad,carrera) VALUES
	    (:nombre,:apellido,:telefono,:correo,:direccion,:ciudad,:carrera)";
	

	    try{
	        // Get DB Object
	        $db = new db();
	        // Connect
	        $db = $db->connect();
	

	        $stmt = $db->prepare($sql);
	

	        $stmt->bindParam(':nombre ', $nombre);
	        $stmt->bindParam(':apellido ',  $apellido);
	        $stmt->bindParam(':telefono',   $telefono);
	        $stmt->bindParam(':correo',     $correo);
	        $stmt->bindParam(':direccion',  $direccion);
	        $stmt->bindParam(':ciudad',     $ciudad);
	        $stmt->bindParam(':carrera',    $carrera);
	

	        $stmt->execute();
	

	        echo '{"notice": {"text": " estudiantes Added"}';
	

	    } catch(PDOException $e){
	        echo '{"error": {"text": '.$e->getMessage().'}';
	    }
	});
	

	// Update estudiantes
	$app->put('/api/ estudiantes /update/{ codigo }', function(Request $request, Response $response){
	    $ codigo = $request->getAttribute('codigo');
	    $ nombre = $request->getParam('nombre');
	    $ apellido = $request->getParam('apellido');
	    $ telefono = $request->getParam('telefono');
	    $correo = $request->getParam('correo');
	    $direccion = $request->getParam('direccion');
	    $ciudad = $request->getParam('ciudad');
	    $carrera = $request->getParam('carrera');
	

	    $sql = "UPDATE estudiantes SET
			  nombre 	= :nombre,
			  apellido 	= :apellido,
	                telefono	= :telefono,
	                correo	= :correo,
	                direccion 	= :direccion,
	                ciudad 	= :ciudad,
	                carrera	= :carrera
				WHERE codigo = $ codigo ";
	

	    try{
	        // Get DB Object
	        $db = new db();
	        // Connect
	        $db = $db->connect();
	

	        $stmt = $db->prepare($sql);
	

	        $stmt->bindParam(':nombre', $nombre);
	        $stmt->bindParam(':apellido',  $apellido);
	        $stmt->bindParam(':telefono',  $telefono);
	        $stmt->bindParam(':correo',    $correo);
	        $stmt->bindParam(':direccion', $direccion);
	        $stmt->bindParam(':ciudad',    $ciudad);
	        $stmt->bindParam(':carrera',   $carrera);
	

	        $stmt->execute();
	

	        echo '{"notice": {"text": " estudiantes Updated"}';
	

	    } catch(PDOException $e){
	        echo '{"error": {"text": '.$e->getMessage().'}';
	    }
	});
	

	// Delete estudiantes
	$app->delete('/api/ estudiantes /delete/{ codigo }', function(Request $request, Response $response){
	    $ codigo = $request->getAttribute(' codigo ');
	

	    $sql = "DELETE FROM estudiantes WHERE codigo = $ codigo ";
	

	    try{
	        // Get DB Object
	        $db = new db();
	        // Connect
	        $db = $db->connect();
	

	        $stmt = $db->prepare($sql);
	        $stmt->execute();
	        $db = null;
	        echo '{"notice": {"text": " estudiantes Deleted"}';
	    } catch(PDOException $e){
	        echo '{"error": {"text": '.$e->getMessage().'}';
	    }
	});
