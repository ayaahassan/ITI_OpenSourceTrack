const mongoose=require('mongoose')
const Schema=mongoose.Schema

const UserSchema=new Schema({
    id:{
        type:Number,
        required:true,
        unique:true
    },
    first_name:{
        type:String,
        required:true

    },
    age:{
        type:Number,
        required:true

    },
    email:{
        type:String,
        required:true

    }
})

const User = mongoose.model('users', UserSchema);
module.exports = User;









