<?php

namespace App\Models;

class BookModel extends Model
{
protected string $title;  
protected string $isbn;  
protected string $pageCount;
protected string $publishedDate;
protected string $thumbnailUrl; 
protected string $shortDescription;
protected string $longDescription;
protected string $status;
protected string $authors_0;
protected string $authors_1;
protected string $authors_2;
protected string $categories_0;
protected string $categories_1;
protected string $authors_3;
protected string $authors_4;
protected string $categories_2;
protected string $authors_5;
protected string $authors_6;
protected string $authors_7;
protected string $categories_3;

    public function __construct($table, $db = null){
        //$this->table = 'books';
		
        parent::__construct($table, $db);
    }

/**
* @return string
*/
public function getTitle(): string {
	return $this->title;
}

/**
* @param string $title
*/
public function setTitle(string $title): void {
	$this->title = $title;
}

/**
* @return string
*/
public function getIsbn(): string {
	return $this->isbn;
}

/**
* @param string $isbn
*/
public function setIsbn(string $isbn): void {
	$this->isbn = $isbn;
}

/**
* @return string
*/
public function getPageCount(): string {
	return $this->pageCount;
}

/**
* @param string $pageCount
*/
public function setPageCount(string $pageCount): void {
	$this->pageCount = $pageCount;
}

/**
* @return string
*/
public function getPublishedDate(): string {
	return $this->publishedDate;
}

/**
* @param string $publishedDate
*/
public function setPublishedDate(string $publishedDate): void {
	$this->publishedDate = $publishedDate;
}

/**
* @return string
*/
public function getThumbnailUrl(): string {
	return $this->thumbnailUrl;
}

/**
* @param string $thumbnailUrl
*/
public function setThumbnailUrl(string $thumbnailUrl): void {
	$this->thumbnailUrl = $thumbnailUrl;
}

/**
* @return string
*/
public function getShortDescription(): string {
	return $this->shortDescription;
}

/**
* @param string $shortDescription
*/
public function setShortDescription(string $shortDescription): void {
	$this->shortDescription = $shortDescription;
}

/**
* @return string
*/
public function getLongDescription(): string {
	return $this->longDescription;
}

/**
* @param string $longDescription
*/
public function setLongDescription(string $longDescription): void {
	$this->longDescription = $longDescription;
}

/**
* @return string
*/
public function getStatus(): string {
	return $this->status;
}

/**
* @param string $status
*/
public function setStatus(string $status): void {
	$this->status = $status;
}

/**
* @return string
*/
public function getAuthors_0(): string {
	return $this->authors_0;
}

/**
* @param string $authors_0
*/
public function setAuthors_0(string $authors_0): void {
	$this->authors_0 = $authors_0;
}

/**
* @return string
*/
public function getAuthors_1(): string {
	return $this->authors_1;
}

/**
* @param string $authors_1
*/
public function setAuthors_1(string $authors_1): void {
	$this->authors_1 = $authors_1;
}

/**
* @return string
*/
public function getAuthors_2(): string {
	return $this->authors_2;
}

/**
* @param string $authors_2
*/
public function setAuthors_2(string $authors_2): void {
	$this->authors_2 = $authors_2;
}

/**
* @return string
*/
public function getCategories_0(): string {
	return $this->categories_0;
}

/**
* @param string $categories_0
*/
public function setCategories_0(string $categories_0): void {
	$this->categories_0 = $categories_0;
}

/**
* @return string
*/
public function getCategories_1(): string {
	return $this->categories_1;
}

/**
* @param string $categories_1
*/
public function setCategories_1(string $categories_1): void {
	$this->categories_1 = $categories_1;
}

/**
* @return string
*/
public function getAuthors_3(): string {
	return $this->authors_3;
}

/**
* @param string $authors_3
*/
public function setAuthors_3(string $authors_3): void {
	$this->authors_3 = $authors_3;
}

/**
* @return string
*/
public function getAuthors_4(): string {
	return $this->authors_4;
}

/**
* @param string $authors_4
*/
public function setAuthors_4(string $authors_4): void {
	$this->authors_4 = $authors_4;
}

/**
* @return string
*/
public function getCategories_2(): string {
	return $this->categories_2;
}

/**
* @param string $categories_2
*/
public function setCategories_2(string $categories_2): void {
	$this->categories_2 = $categories_2;
}

/**
* @return string
*/
public function getAuthors_5(): string {
	return $this->authors_5;
}

/**
* @param string $authors_5
*/
public function setAuthors_5(string $authors_5): void {
	$this->authors_5 = $authors_5;
}

/**
* @return string
*/
public function getAuthors_6(): string {
	return $this->authors_6;
}

/**
* @param string $authors_6
*/
public function setAuthors_6(string $authors_6): void {
	$this->authors_6 = $authors_6;
}

/**
* @return string
*/
public function getAuthors_7(): string {
	return $this->authors_7;
}

/**
* @param string $authors_7
*/
public function setAuthors_7(string $authors_7): void {
	$this->authors_7 = $authors_7;
}

/**
* @return string
*/
public function getCategories_3(): string {
	return $this->categories_3;
}

/**
* @param string $categories_3
*/
public function setCategories_3(string $categories_3): void {
	$this->categories_3 = $categories_3;
}
}