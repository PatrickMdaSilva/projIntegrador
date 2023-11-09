<?php
require_once(dirname(__DIR__)."/models/Book.php");
interface BookInterfaces
{
    public function construirBook($data);
    public function criarBook( Book $book,$userData);
    public function atualizarBook(Book $book, $userData);
    public function wantBook($userData);
    public function buscarBook();
    public function donorBook($userData);
    public function solicitedBook($id);
    public function decrepBook($id);
    public function imageGenerateName();
    public function destroyId($id);
}