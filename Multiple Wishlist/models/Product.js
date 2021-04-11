const mongoose=require("mongoose")

const productSchema=new mongoose.Schema({
    title: {type:String, required:true},
    company: {type:String, required:true},
    imageURL: {type:String, required:true},
    price: {type: Number, required:true}
})

module.exports=mongoose.model("Product", productSchema)