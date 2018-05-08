<?php include 'html_inicial.php' ?>
<div class="empty-space-80"></div>
<!-- checkout -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Está quase a terminar...</h2>
                <p>Pedimos, por favor, que preencha os dados abaixo para poder finalizar a sua compra.
                    <br> Já é nosso cliente?
                    <a href="#iniciarSessao" title>Inicie aqui
                    </a> a sessão de forma segura.</p>
                <!-- table items -->
                <hr>
                <div class="row">
                    <div class="col-sm-7">
                        <!-- morada de faturacao -->
                        <div class="checkout-cart">
                            <div class="checkout-cart-title">
                                <h4>1. Morada de Faturação</h4>
                            </div>
                            <div class="checkout-cart-body">
                                <form action="">
                                    <div class="form-field">
                                        <label for="complete_name">Nome Completo</label>
                                        <input type="text" class="form-control required" id="complete_name" name="complete_name">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- morada de envio -->
                        <div class="checkout-cart">
                            <div class="checkout-cart-title">
                                <h4>2. Morada de Envio</h4>
                            </div>
                            <div class="checkout-cart-body">

                            </div>
                        </div>
                        <!-- metodo de envio -->
                        <div class="checkout-cart">
                            <div class="checkout-cart-title">
                                <h4>3. Método de Envio</h4>
                            </div>
                            <div class="checkout-cart-body">

                            </div>
                        </div>
                        <!-- metodo de pagamento -->
                        <div class="checkout-cart">
                            <div class="checkout-cart-title">
                                <h4>4. Método de Pagamento</h4>
                            </div>
                            <div class="checkout-cart-body">

                            </div>
                        </div>
                        <!-- comentario -->
                        <div class="checkout-cart">
                            <div class="checkout-cart-title">
                                <h4>5. Deixe o seu comentário</h4>
                            </div>
                            <div class="checkout-cart-body">

                            </div>
                        </div>
                        <!-- termos e condições -->

                        <!-- finalizar compra -->
                        <button type="submit" class="btn btn-primary">Finalizar Compra</button>
                    </div>
                    <div class="col-sm-5">
                        <!-- Order Summary -->
                        <div class="checkout-cart">
                            <div class="checkout-cart-title">
                                <h4>A sua encomenda</h4>
                            </div>
                            <div class="checkout-cart-body">
                                <form action="">
                                    <div class="form-field">
                                        <label for="complete_name">Nome Completo</label>
                                        <input type="text" class="form-control required" id="complete_name" name="complete_name">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- table items ends -->
            </div>
        </div>
    </div>
</section>
<!-- checkout ends -->
<div class="empty-space-80"></div>

<?php include 'html_final.php' ?>