<?php

namespace CodeDelivery\Http\Controllers\Api\Client;

use CodeDelivery\Http\Controllers\Controller;
use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\ProductRepository;
use CodeDelivery\Repositories\UserRepository;
use CodeDelivery\Services\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;

class ClientCheckoutController extends Controller
{
    /**
     * @var OrderRepository
     */
    private $repository;
    /**
     * @var UserRepository
     */
    private $userRepository;
    /**
     * @var ProductRepository
     */
    private $productRepository;
    /**
     * @var OrderService
     */
    private $orderService;

    public function __construct(OrderRepository $repository, UserRepository $userRepository, ProductRepository $productRepository, OrderService $orderService)
    {
        $this->repository = $repository;
        $this->userRepository = $userRepository;
        $this->productRepository = $productRepository;
        $this->orderService = $orderService;
    }

    public function index()
    {
        $id = Authorizer::getResourceOwnerId();
        $clientId = $this->userRepository->find($id)->client->id;
        $orders = $this->repository->with('items')->scopeQuery(function($query) use ($clientId){
            return $query->where('client_id','=',$clientId);
        })->paginate();

        return $orders;

    }

    public function store(Request $request)
    {
        $data = $request->all();
        $clientId = $this->userRepository->find(Auth::user()->id)->client->id;
        $data['client_id'] = $clientId;
        $this->orderService->create($data);

        return redirect()->route('customer.order.index');
    }

    public function show(){
        return ['minha order'];
    }
}
