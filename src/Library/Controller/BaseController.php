<?php
namespace Contabilissimo\Library\Controller;


abstract class BaseController
{
  protected $params;
  protected $response;
  protected $request;

  public function render() {

  }

  /**
   * @return mixed
   */
  public function getRequest()
  {
    return $this->request;
  }

  /**
   * @param mixed $request
   */
  public function setRequest($request)
  {
    $this->request = $request;
  }

  /**
   * @return mixed
   */
  public function getResponse()
  {
    return $this->response;
  }

  /**
   * @param mixed $response
   */
  public function setResponse($response)
  {
    $this->response = $response;
  }

}
