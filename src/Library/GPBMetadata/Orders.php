<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace GPBMetadata;

class Orders
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab82a0a0c6f72646572732e70726f746f122574696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76311a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22270a1354726164657353747265616d5265717565737412100a086163636f756e747318012003280922aa010a1454726164657353747265616d526573706f6e7365124a0a0c6f726465725f74726164657318012001280b32322e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f726465725472616465734800123b0a0470696e6718022001280b322b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e50696e67480042090a077061796c6f61642296020a0b4f7264657254726164657312100a086f726465725f6964180120012809122e0a0a637265617465645f617418022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012480a09646972656374696f6e18032001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572446972656374696f6e120c0a046669676918042001280912410a0674726164657318052003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572547261646512120a0a6163636f756e745f696418062001280912160a0e696e737472756d656e745f75696418072001280922a0010a0a4f726465725472616465122d0a09646174655f74696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70123f0a05707269636518022001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12100a087175616e7469747918032001280312100a0874726164655f696418042001280922c4020a10506f73744f726465725265717565737412100a04666967691801200128094202180112100a087175616e74697479180220012803123f0a05707269636518032001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12480a09646972656374696f6e18042001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572446972656374696f6e12120a0a6163636f756e745f696418052001280912440a0a6f726465725f7479706518062001280e32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f726465725479706512100a086f726465725f696418072001280912150a0d696e737472756d656e745f696418082001280922f9070a11506f73744f72646572526573706f6e736512100a086f726465725f696418012001280912620a17657865637574696f6e5f7265706f72745f73746174757318022001280e32412e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572457865637574696f6e5265706f727453746174757312160a0e6c6f74735f72657175657374656418032001280312150a0d6c6f74735f6578656375746564180420012803124e0a13696e697469616c5f6f726465725f707269636518052001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124f0a1465786563757465645f6f726465725f707269636518062001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124d0a12746f74616c5f6f726465725f616d6f756e7418072001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124d0a12696e697469616c5f636f6d6d697373696f6e18082001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124e0a1365786563757465645f636f6d6d697373696f6e18092001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512440a096163695f76616c7565180a2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565120c0a0466696769180b2001280912480a09646972656374696f6e180c2001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572446972656374696f6e12510a16696e697469616c5f73656375726974795f7072696365180d2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512440a0a6f726465725f74797065180e2001280e32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7264657254797065120f0a076d657373616765180f2001280912500a16696e697469616c5f6f726465725f70726963655f707418102001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12160a0e696e737472756d656e745f756964181120012809223a0a1243616e63656c4f726465725265717565737412120a0a6163636f756e745f696418012001280912100a086f726465725f6964180220012809223f0a1343616e63656c4f72646572526573706f6e736512280a0474696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70223c0a144765744f7264657253746174655265717565737412120a0a6163636f756e745f696418012001280912100a086f726465725f696418022001280922260a104765744f72646572735265717565737412120a0a6163636f756e745f696418012001280922560a114765744f7264657273526573706f6e736512410a066f726465727318012003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f726465725374617465228a090a0a4f72646572537461746512100a086f726465725f696418012001280912620a17657865637574696f6e5f7265706f72745f73746174757318022001280e32412e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572457865637574696f6e5265706f727453746174757312160a0e6c6f74735f72657175657374656418032001280312150a0d6c6f74735f6578656375746564180420012803124e0a13696e697469616c5f6f726465725f707269636518052001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124f0a1465786563757465645f6f726465725f707269636518062001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124d0a12746f74616c5f6f726465725f616d6f756e7418072001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512510a16617665726167655f706f736974696f6e5f707269636518082001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124d0a12696e697469616c5f636f6d6d697373696f6e18092001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124e0a1365786563757465645f636f6d6d697373696f6e180a2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565120c0a0466696769180b2001280912480a09646972656374696f6e180c2001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f72646572446972656374696f6e12510a16696e697469616c5f73656375726974795f7072696365180d2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512410a06737461676573180e2003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f726465725374616765124d0a12736572766963655f636f6d6d697373696f6e180f2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512100a0863757272656e637918102001280912440a0a6f726465725f7479706518112001280e32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7264657254797065122e0a0a6f726465725f6461746518122001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012160a0e696e737472756d656e745f75696418132001280912180a106f726465725f726571756573745f696418142001280922720a0a4f72646572537461676512400a05707269636518012001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512100a087175616e7469747918022001280312100a0874726164655f696418032001280922ed010a135265706c6163654f726465725265717565737412120a0a6163636f756e745f696418012001280912100a086f726465725f696418062001280912170a0f6964656d706f74656e63795f6b657918072001280912100a087175616e74697479180b20012803123f0a057072696365180c2001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12440a0a70726963655f74797065180d2001280e32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5072696365547970652a640a0e4f72646572446972656374696f6e121f0a1b4f524445525f444952454354494f4e5f554e535045434946494544100012170a134f524445525f444952454354494f4e5f425559100112180a144f524445525f444952454354494f4e5f53454c4c10022a6e0a094f7264657254797065121a0a164f524445525f545950455f554e535045434946494544100012140a104f524445525f545950455f4c494d4954100112150a114f524445525f545950455f4d41524b4554100212180a144f524445525f545950455f42455354505249434510032a80020a1a4f72646572457865637574696f6e5265706f727453746174757312270a23455845435554494f4e5f5245504f52545f5354415455535f554e535045434946494544100012200a1c455845435554494f4e5f5245504f52545f5354415455535f46494c4c100112240a20455845435554494f4e5f5245504f52545f5354415455535f52454a4543544544100212250a21455845435554494f4e5f5245504f52545f5354415455535f43414e43454c4c45441003121f0a1b455845435554494f4e5f5245504f52545f5354415455535f4e4557100412290a25455845435554494f4e5f5245504f52545f5354415455535f5041525449414c4c5946494c4c10052a560a09507269636554797065121a0a1650524943455f545950455f554e535045434946494544100012140a1050524943455f545950455f504f494e54100112170a1350524943455f545950455f43555252454e4359100232a1010a134f726465727353747265616d536572766963651289010a0c54726164657353747265616d123a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e54726164657353747265616d526571756573741a3b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e54726164657353747265616d526573706f6e73653001329e050a0d4f726465727353657276696365127e0a09506f73744f7264657212372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f73744f72646572526571756573741a382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f73744f72646572526573706f6e73651284010a0b43616e63656c4f7264657212392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e63656c4f72646572526571756573741a3a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e63656c4f72646572526573706f6e7365127f0a0d4765744f726465725374617465123b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744f726465725374617465526571756573741a312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f726465725374617465127e0a094765744f726465727312372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744f7264657273526571756573741a382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744f7264657273526573706f6e73651284010a0c5265706c6163654f72646572123a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e5265706c6163654f72646572526571756573741a382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f73744f72646572526573706f6e736542610a1c72752e74696e6b6f66662e70696170692e636f6e74726163742e763150015a0c2e2f3b696e76657374617069a202055449415049aa021454696e6b6f66662e496e766573744170692e5631ca021154696e6b6f66665c496e766573745c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

