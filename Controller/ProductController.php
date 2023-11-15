<?php
    namespace Controller;

    include "Traits/ResponseFormatter.php";
    include "Controller/Controller.php";

    use Traits\ResponseFormatter;

    class ProductController extends Controller
    {

        use ResponseFormatter;

        public function __construct(){
            $this->controllerName = "Get All Produk";
            $this->controllerMethod = "GET";
        }

        public function getAllProduct(){
            $dummyData = [
                "air Mineral",
                "air Galon",
                "kebab",
                "es teh"
            ];

            $response = [
                "controller_atributes" => $this->getControllerAtribute(),
                "produc" => $dummyData
            ];

            return $this->responseFormatter(200, "Sukses", $response);
        }
    }
    