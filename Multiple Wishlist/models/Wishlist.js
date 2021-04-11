const mongoose=require("mongoose")

const wishlistSchema=new mongoose.Schema({
    title: {type:String, required:true},
    products:[{type:mongoose.ObjectId, ref:"Product"}],
})

module.exports=mongoose.model("Wishlist", wishlistSchema)