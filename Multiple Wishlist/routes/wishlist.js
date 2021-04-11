var express = require('express');
const Wishlist = require('../models/Wishlist');
var router = express.Router();

/* GET users listing. */
router.get("/wishlist", async(req, res)=>{
  const wishlists=await Wishlist.find({});
  return res.render("wishlist", {wishlists})
})
router.post('/addToWishlist/:product_id', async(req, res, next) =>{
  const wishlistName=req.body.wishlist;

  const foundWishlist=await Wishlist.findOne({title:wishlistName});

  if(!foundWishlist){
    const newWishlist=new Wishlist({title:wishlistName, products:[req.params.product_id]});
    await newWishlist.save();
    console.log(newWishlist)
  }else{
    foundWishlist.products.push(req.params.product_id);
    await foundWishlist.save();
    console.log(foundWishlist)
  }

  res.redirect("/");
});
router.get("/wishlist/:wishlist_id", async(req, res)=>{
  const wishlist=await (await Wishlist.findById(req.params.wishlist_id)).execPopulate("products");
  console.log(wishlist)
  return res.render("product", {title:wishlist.title, products:wishlist.products})
})

module.exports = router;