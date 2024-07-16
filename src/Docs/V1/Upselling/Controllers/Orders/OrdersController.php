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
     *          @OA\Property(property="product_id", type="integer",
     *          description="Product id",
     *          example="1",
     *          ),
     *        @OA\Property(property="quantity", type="integer",
     *         description="Product quantity",
     *        example="1",
     *          ),
     *       @OA\Property(property="price", type="number",  format="float",
     *       description="Product price",
     *      example="100.00",
     *      ),
     *      @OA\Property(property="total", type="number",  format="float",
     *      description="Product total",
     *      example="100.00",
     *      ),
     *     @OA\Property(property="discount", type="number",  format="float",
     *      description="Product discount",
     *      example="0.00",
     *      ),
     *    @OA\Property(property="tax", type="number",  format="float",
     *      description="Product tax",
     *      example="0.00",
     *     ),
     *   @OA\Property(property="shipping", type="number",  format="float",
     *     description="Product shipping",
     *    example="0.00",
     *   ),
     *      ),
     *    ),
     *   ),
     *      @OA\Parameter(
     *         name="total",
     *          in="query",
     *          description="Total",
     *          required=true,
     *      @OA\Schema(
     *      type="number",
     *      format="float",
     *      example="100.00",
     *          ),
     *      ),
     *     @OA\Parameter(
     *        name="shipping_address",
     *       in="query",
     *      description="Shipping address",
     *     required=true,
     *   @OA\Schema(
     *     type="object",
     *   @OA\Property(property="first_name", type="string",
     *    description="First name",
     *  example="John",
     * ),
     * @OA\Property(property="last_name", type="string",
     * description="Last name",
     * example="Doe",
     * ),
     * @OA\Property(property="address", type="string",
     * description="Address",
     * example="123 Street",
     * ),
     * @OA\Property(property="city", type="string",
     * description="City",
     * example="New York",
     * ),
     * @OA\Property(property="state", type="string",
     * description="State",
     * example="NY",
     * ),
     * @OA\Property(property="zip", type="string",
     * description="Zip",
     * example="10001",
     * ),
     * @OA\Property(property="country", type="string",
     * description="Country",
     * example="US",
     * ),
     * @OA\Property(property="phone", type="string",
     * description="Phone",
     * example="1234567890",
     * ),
     * ),
     * ),
     * @OA\Parameter(
     * name="billing_address",
     * in="query",
     * description="Billing address",
     * required=true,
     * @OA\Schema(
     * type="object",
     * @OA\Property(property="first_name", type="string",
     * description="First name",
     * example="John",
     * ),
     * @OA\Property(property="last_name", type="string",
     * description="Last name",
     * example="Doe",
     * ),
     * @OA\Property(property="address", type="string",
     * description="Address",
     * example="123 Street",
     * ),
     * @OA\Property(property="city", type="string",
     * description="City",
     * example="New York",
     * ),
     * @OA\Property(property="state", type="string",
     * description="State",
     * example="NY",
     * ),
     * @OA\Property(property="zip", type="string",
     * description="Zip",
     * example="10001",
     * ),
     * @OA\Property(property="country", type="string",
     * description="Country",
     * example="US",
     * ),
     * @OA\Property(property="phone", type="string",
     * description="Phone",
     * example="1234567890",
     * ),
     * ),
     * ),
     * @OA\Parameter(
     * name="payment",
     * in="query",
     * description="Payment",
     * required=true,
     * @OA\Schema(
     * type="object",
     * @OA\Property(property="method", type="string",
     * description="Payment method",
     * example="paypal",
     * ),
     * @OA\Property(property="status", type="string",
     * description="Payment status",
     * example="completed",
     * ),
     * @OA\Property(property="total", type="number",  format="float",
     * description="Payment total",
     * example="100.00",
     * ),
     * @OA\Property(property="currency", type="string",
     * description="Payment currency",
     * example="USD",
     * ),
     * @OA\Property(property="transaction_id", type="string",
     * description="Payment transaction id",
     * example="1234567890",
     * ),
     * ),
     * ),
     * 
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