var express = require('express');
const Product = require('../models/Product');
var router = express.Router();
var Wishlist = require("../models/Wishlist");

/* GET home page. */
router.get('/', async(req, res, next) =>{
  const wishlists=await Wishlist.find({});
  const products=await Product.find({});
  res.render('index', {wishlists, products});
});

module.exports = router;
