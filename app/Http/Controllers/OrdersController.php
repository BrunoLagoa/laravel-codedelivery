<?php

namespace CodeDelivery\Http\Controllers;


use CodeDelivery\Repositories\OrderRepository;
use CodeDelivery\Repositories\UserRepository;

class OrdersController extends Controller
{

    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $orders = $this->repository->paginate();

        return view('admin.orders.index', compact('orders'));
    }

    public function edit(UserRepository $userRepository, $id)
    {
        $list_status = [0=>'Pendente', 1=>'A Caminho', 2=>'Entregue'];
        $order = $this->repository->find($id);

        $deliveryman = $userRepository->getDeliverymen();

        return view('admin.orders.edit', compact('order','list_status','deliveryman'));
    }

}