<?php
namespace NexaMerchant\Upselling\Docs\V1\Upselling\Controllers\Orders;

class OrdersController {

    /**
     * @OA\Get(
     *      path="/api/v1/orders",
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
}