<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace GPBMetadata;

class Marketdata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac93c0a106d61726b6574646174612e70726f746f122574696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76311a0c636f6d6d6f6e2e70726f746f22af030a114d61726b6574446174615265717565737412630a197375627363726962655f63616e646c65735f7265717565737418012001280b323e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53756273637269626543616e646c657352657175657374480012680a1c7375627363726962655f6f726465725f626f6f6b5f7265717565737418022001280b32402e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5375627363726962654f72646572426f6f6b52657175657374480012610a187375627363726962655f7472616465735f7265717565737418032001280b323d2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372696265547261646573526571756573744800125d0a167375627363726962655f696e666f5f7265717565737418042001280b323b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372696265496e666f52657175657374480042090a077061796c6f6164228c060a124d61726b657444617461526573706f6e736512650a1a7375627363726962655f63616e646c65735f726573706f6e736518012001280b323f2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53756273637269626543616e646c6573526573706f6e73654800126a0a1d7375627363726962655f6f726465725f626f6f6b5f726573706f6e736518022001280b32412e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5375627363726962654f72646572426f6f6b526573706f6e7365480012630a197375627363726962655f7472616465735f726573706f6e736518032001280b323e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372696265547261646573526573706f6e73654800125f0a177375627363726962655f696e666f5f726573706f6e736518042001280b323c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372696265496e666f526573706f6e73654800123f0a0663616e646c6518052001280b322d2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e646c654800123d0a05747261646518062001280b322c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5472616465480012450a096f72646572626f6f6b18072001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572426f6f6b4800124e0a0e74726164696e675f73746174757318082001280b32342e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e54726164696e675374617475734800123b0a0470696e6718092001280b322b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e50696e67480042090a077061796c6f616422bf010a1753756273637269626543616e646c65735265717565737412560a13737562736372697074696f6e5f616374696f6e18012001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e416374696f6e124c0a0b696e737472756d656e747318022003280b32372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e646c65496e737472756d656e74226f0a1043616e646c65496e737472756d656e74120c0a0466696769180120012809124d0a08696e74657276616c18022001280e323b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e496e74657276616c2289010a1853756273637269626543616e646c6573526573706f6e736512130a0b747261636b696e675f696418012001280912580a1563616e646c65735f737562736372697074696f6e7318022003280b32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e646c65537562736372697074696f6e22c9010a1243616e646c65537562736372697074696f6e120c0a0466696769180120012809124d0a08696e74657276616c18022001280e323b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e496e74657276616c12560a13737562736372697074696f6e5f73746174757318032001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e53746174757322c4010a195375627363726962654f72646572426f6f6b5265717565737412560a13737562736372697074696f6e5f616374696f6e18012001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e416374696f6e124f0a0b696e737472756d656e747318022003280b323a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572426f6f6b496e737472756d656e7422320a134f72646572426f6f6b496e737472756d656e74120c0a0466696769180120012809120d0a0564657074681802200128052291010a1a5375627363726962654f72646572426f6f6b526573706f6e736512130a0b747261636b696e675f6964180120012809125e0a186f726465725f626f6f6b5f737562736372697074696f6e7318022003280b323c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572426f6f6b537562736372697074696f6e228c010a154f72646572426f6f6b537562736372697074696f6e120c0a0466696769180120012809120d0a05646570746818022001280512560a13737562736372697074696f6e5f73746174757318032001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e53746174757322bd010a165375627363726962655472616465735265717565737412560a13737562736372697074696f6e5f616374696f6e18012001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e416374696f6e124b0a0b696e737472756d656e747318022003280b32362e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5472616465496e737472756d656e74221f0a0f5472616465496e737472756d656e74120c0a04666967691801200128092285010a17537562736372696265547261646573526573706f6e736512130a0b747261636b696e675f696418012001280912550a1374726164655f737562736372697074696f6e7318022003280b32382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5472616465537562736372697074696f6e22790a115472616465537562736372697074696f6e120c0a046669676918012001280912560a13737562736372697074696f6e5f73746174757318022001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e53746174757322ba010a14537562736372696265496e666f5265717565737412560a13737562736372697074696f6e5f616374696f6e18012001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e416374696f6e124a0a0b696e737472756d656e747318022003280b32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e496e666f496e737472756d656e74221e0a0e496e666f496e737472756d656e74120c0a04666967691801200128092281010a15537562736372696265496e666f526573706f6e736512130a0b747261636b696e675f696418012001280912530a12696e666f5f737562736372697074696f6e7318022003280b32372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e496e666f537562736372697074696f6e22780a10496e666f537562736372697074696f6e120c0a046669676918012001280912560a13737562736372697074696f6e5f73746174757318022001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e537461747573229f030a0643616e646c65120c0a0466696769180120012809124d0a08696e74657276616c18022001280e323b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e537562736372697074696f6e496e74657276616c123e0a046f70656e18032001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123e0a046869676818042001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123d0a036c6f7718052001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123f0a05636c6f736518062001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e120e0a06766f6c756d6518072001280312280a0474696d6518082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022e1010a094f72646572426f6f6b120c0a0466696769180120012809120d0a05646570746818022001280512150a0d69735f636f6e73697374656e74180320012808123a0a046269647318042003280b322c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572123a0a0461736b7318052003280b322c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7264657212280a0474696d6518062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70225a0a054f72646572123f0a05707269636518012001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12100a087175616e7469747918022001280322e1010a055472616465120c0a046669676918012001280912480a09646972656374696f6e18022001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5472616465446972656374696f6e123f0a05707269636518032001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12100a087175616e74697479180420012803122d0a0974696d657374616d7018052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022730a0d54726164696e67537461747573120c0a046669676918012001280912540a0e74726164696e675f73746174757318022001280e323c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e536563757269747954726164696e6753746174757322bc010a1147657443616e646c657352657175657374120c0a046669676918012001280912280a0466726f6d18022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012260a02746f18032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012470a08696e74657276616c18042001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e646c65496e74657276616c225c0a1247657443616e646c6573526573706f6e736512460a0763616e646c657318012003280b32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e486973746f72696343616e646c6522df020a0e486973746f72696343616e646c65123e0a046f70656e18012001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123e0a046869676818022001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123d0a036c6f7718032001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123f0a05636c6f736518042001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e120e0a06766f6c756d6518052001280312280a0474696d6518062001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012130a0b69735f636f6d706c65746518072001280822240a144765744c61737450726963657352657175657374120c0a0466696769180120032809225e0a154765744c617374507269636573526573706f6e736512450a0b6c6173745f70726963657318012003280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4c61737450726963652284010a094c6173745072696365120c0a0466696769180120012809123f0a05707269636518022001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12280a0474696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022320a134765744f72646572426f6f6b52657175657374120c0a0466696769180120012809120d0a05646570746818022001280522b8020a144765744f72646572426f6f6b526573706f6e7365120c0a0466696769180120012809120d0a056465707468180220012805123a0a046269647318032003280b322c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572123a0a0461736b7318042003280b322c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7264657212440a0a6c6173745f707269636518052001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12450a0b636c6f73655f707269636518062001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e22270a1747657454726164696e6753746174757352657175657374120c0a0466696769180120012809227e0a1847657454726164696e67537461747573526573706f6e7365120c0a046669676918012001280912540a0e74726164696e675f73746174757318022001280e323c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e536563757269747954726164696e675374617475732a81010a12537562736372697074696f6e416374696f6e12230a1f535542534352495054494f4e5f414354494f4e5f554e535045434946494544100012210a1d535542534352495054494f4e5f414354494f4e5f535542534352494245100112230a1f535542534352495054494f4e5f414354494f4e5f554e53554253435249424510022a8b010a14537562736372697074696f6e496e74657276616c12250a21535542534352495054494f4e5f494e54455256414c5f554e535045434946494544100012240a20535542534352495054494f4e5f494e54455256414c5f4f4e455f4d494e555445100112260a22535542534352495054494f4e5f494e54455256414c5f464956455f4d494e5554455310022aea020a12537562736372697074696f6e53746174757312230a1f535542534352495054494f4e5f5354415455535f554e5350454349464945441000121f0a1b535542534352495054494f4e5f5354415455535f535543434553531001122c0a28535542534352495054494f4e5f5354415455535f494e535452554d454e545f4e4f545f464f554e44100212360a32535542534352495054494f4e5f5354415455535f535542534352495054494f4e5f414354494f4e5f49535f494e56414c4944100312280a24535542534352495054494f4e5f5354415455535f44455054485f49535f494e56414c49441004122b0a27535542534352495054494f4e5f5354415455535f494e54455256414c5f49535f494e56414c4944100512290a25535542534352495054494f4e5f5354415455535f4c494d49545f49535f4558434545444544100612260a22535542534352495054494f4e5f5354415455535f494e5445524e414c5f4552524f5210072a640a0e5472616465446972656374696f6e121f0a1b54524144455f444952454354494f4e5f554e535045434946494544100012170a1354524144455f444952454354494f4e5f425559100112180a1454524144455f444952454354494f4e5f53454c4c10022ab6010a0e43616e646c65496e74657276616c121f0a1b43414e444c455f494e54455256414c5f554e535045434946494544100012190a1543414e444c455f494e54455256414c5f315f4d494e100112190a1543414e444c455f494e54455256414c5f355f4d494e1002121a0a1643414e444c455f494e54455256414c5f31355f4d494e100312180a1443414e444c455f494e54455256414c5f484f5552100412170a1343414e444c455f494e54455256414c5f444159100532c4040a114d61726b657444617461536572766963651281010a0a47657443616e646c657312382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657443616e646c6573526571756573741a392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657443616e646c6573526573706f6e7365128a010a0d4765744c617374507269636573123b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744c617374507269636573526571756573741a3c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744c617374507269636573526573706f6e73651287010a0c4765744f72646572426f6f6b123a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744f72646572426f6f6b526571756573741a3b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744f72646572426f6f6b526573706f6e73651293010a1047657454726164696e67537461747573123e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657454726164696e67537461747573526571756573741a3f2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657454726164696e67537461747573526573706f6e736532a7010a174d61726b65744461746153747265616d53657276696365128b010a104d61726b65744461746153747265616d12382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d61726b657444617461526571756573741a392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d61726b657444617461526573706f6e73652801300142610a1c72752e74696e6b6f66662e70696170692e636f6e74726163742e763150015a0c2e2f3b696e76657374617069a202055449415049aa021454696e6b6f66662e496e766573744170692e5631ca021154696e6b6f66665c496e766573745c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

