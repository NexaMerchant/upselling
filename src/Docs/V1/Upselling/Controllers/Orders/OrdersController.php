<?php
namespace NexaMerchant\Upselling\Docs\V1\Upselling\Controllers\Orders;

class OrdersController {

    /**
     * @OA\Get(
     *      path="/api/upselling/v1/orders",
     *      operationId="getOrders",
     *      tags={"Orders"},
     *      summary="Get list of orders",
     *      description="Returns list of orders",
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Order id",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="sort",
     *          description="Sort column",
     *          example="id",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="order",
     *          description="Sort order",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="string",
     *              enum={"desc", "asc"}
     *          )
     *      ),
     *
     *      @OA\Parameter(
     *          name="page",
     *          description="Page number",
     *          required=false,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Order")
     *       ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found"
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal server error"
     *      )
     * )
     */
    public function getOrders() {
    }

    /**
     * @OA\Get(
     *      path="/api/upselling/v1/orders/{id}",
     *      operationId="getOrderById",
     *      tags={"Orders"},
     *      summary="Get order information",
     *      description="Returns order data",
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Order id",
     *          required=true,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Order")
     *       ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found"
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal server error"
     *      )
     * )
     */
    public function getOrderById($id) {
    }

    /**
     * @OA\Post(
     *      path="/api/upselling/v1/orders",
     *      operationId="createOrder",
     *      tags={"Orders"},
     *      summary="Create new order",
     *      description="Creates a new order",
     *
     * 
     *     @OA\Parameter(
     *          name="email",
     *          description="email column",
     *          example="upselling@example.com",
     *          required=true,
     *          in="query",
     *
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *     @OA\Parameter(
     *         name="products",
     *        in="query",
     *        description="Products",
     *       required=true,
     *      @OA\Schema(
     *         type="array",
     *       @OA\Items(
     *         type="object",
     *          @OA\Property(property="id", type="integer",
     *          description="Product id",
     *          example="1",
     *          ),
     *        @OA\Property(property="quantity", type="integer",
     *         description="Product quantity",
     *        example="1",
     *      ),
     *      ),
     *    ),
     *   ),
     *
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Order")
     *       ),
     *
     *      @OA\Response(
     *          response=400,
     *          description="Bad request"
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal server error"
     *      )
     * )
     */
    public function createOrder() {}

    /**
     * @OA\Put(
     *      path="/api/upselling/v1/orders/{id}",
     *      operationId="updateOrder",
     *      tags={"Orders"},
     *      summary="Update existing order",
     *      description="Updates an existing order",
     *
     *      @OA\Parameter(
     *          name="id",
     *          description="Order id",
     *          required=true,
     *          in="path",
     *
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(ref="#/components/schemas/Order")
     *      ),
     *
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/Order")
     *       ),
     *
     *      @OA\Response(
     *          response=400,
     *          description="Bad request"
     *      ),
     *
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found"
     *      ),
     *
     *      @OA\Response(
     *          response=500,
     *          description="Internal server error"
     *      )
     * )
     */
    public function updateOrder($id) {}
}