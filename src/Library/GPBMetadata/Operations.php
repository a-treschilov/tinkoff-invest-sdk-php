<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace GPBMetadata;

class Operations
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
            "0ad84a0a106f7065726174696f6e732e70726f746f122574696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76311a0c636f6d6d6f6e2e70726f746f22cd010a114f7065726174696f6e735265717565737412120a0a6163636f756e745f696418012001280912280a0466726f6d18022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012260a02746f18032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012440a05737461746518042001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e5374617465120c0a0466696769180520012809225a0a124f7065726174696f6e73526573706f6e736512440a0a6f7065726174696f6e7318012003280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e22af040a094f7065726174696f6e120a0a026964180120012809121b0a13706172656e745f6f7065726174696f6e5f696418022001280912100a0863757272656e637918032001280912420a077061796d656e7418042001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512400a05707269636518052001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512440a05737461746518062001280e32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e537461746512100a087175616e7469747918072001280312150a0d7175616e746974795f72657374180820012803120c0a046669676918092001280912170a0f696e737472756d656e745f74797065180a2001280912280a0464617465180b2001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70120c0a0474797065180c20012809124c0a0e6f7065726174696f6e5f74797065180d2001280e32342e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e5479706512450a06747261646573180e2003280b32352e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e547261646522a5010a0e4f7065726174696f6e547261646512100a0874726164655f6964180120012809122d0a09646174655f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012100a087175616e7469747918032001280312400a05707269636518042001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756522260a10506f7274666f6c696f5265717565737412120a0a6163636f756e745f696418012001280922bb040a11506f7274666f6c696f526573706f6e7365124e0a13746f74616c5f616d6f756e745f73686172657318012001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124d0a12746f74616c5f616d6f756e745f626f6e647318022001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124b0a10746f74616c5f616d6f756e745f65746618032001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512520a17746f74616c5f616d6f756e745f63757272656e6369657318042001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124f0a14746f74616c5f616d6f756e745f6675747572657318052001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512480a0e65787065637465645f7969656c6418062001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e124b0a09706f736974696f6e7318072003280b32382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f7274666f6c696f506f736974696f6e22260a10506f736974696f6e735265717565737412120a0a6163636f756e745f696418012001280922d7020a11506f736974696f6e73526573706f6e736512400a056d6f6e657918012003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512420a07626c6f636b656418022003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124e0a0a7365637572697469657318032003280b323a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f736974696f6e735365637572697469657312220a1a6c696d6974735f6c6f6164696e675f696e5f70726f677265737318042001280812480a076675747572657318052003280b32372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f736974696f6e7346757475726573222b0a1557697468647261774c696d6974735265717565737412120a0a6163636f756e745f696418012001280922ec010a1657697468647261774c696d697473526573706f6e736512400a056d6f6e657918012003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512420a07626c6f636b656418022003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124c0a11626c6f636b65645f67756172616e74656518032003280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756522a3050a11506f7274666f6c696f506f736974696f6e120c0a046669676918012001280912170a0f696e737472756d656e745f7479706518022001280912420a087175616e7469747918032001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12510a16617665726167655f706f736974696f6e5f707269636518042001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512480a0e65787065637465645f7969656c6418052001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12460a0b63757272656e745f6e6b6418062001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512530a19617665726167655f706f736974696f6e5f70726963655f707418072001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12480a0d63757272656e745f707269636518082001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512560a1b617665726167655f706f736974696f6e5f70726963655f6669666f18092001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512470a0d7175616e746974795f6c6f7473180a2001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e22450a13506f736974696f6e7353656375726974696573120c0a0466696769180120012809120f0a07626c6f636b6564180220012803120f0a0762616c616e636518032001280322420a10506f736974696f6e7346757475726573120c0a0466696769180120012809120f0a07626c6f636b6564180220012803120f0a0762616c616e636518032001280322f2010a1342726f6b65725265706f727452657175657374126c0a1e67656e65726174655f62726f6b65725f7265706f72745f7265717565737418012001280b32422e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47656e657261746542726f6b65725265706f727452657175657374480012620a196765745f62726f6b65725f7265706f72745f7265717565737418022001280b323d2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657442726f6b65725265706f727452657175657374480042090a077061796c6f616422f7010a1442726f6b65725265706f7274526573706f6e7365126e0a1f67656e65726174655f62726f6b65725f7265706f72745f726573706f6e736518012001280b32432e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47656e657261746542726f6b65725265706f7274526573706f6e7365480012640a1a6765745f62726f6b65725f7265706f72745f726573706f6e736518022001280b323e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657442726f6b65725265706f7274526573706f6e7365480042090a077061796c6f61642283010a1b47656e657261746542726f6b65725265706f72745265717565737412120a0a6163636f756e745f696418012001280912280a0466726f6d18022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012260a02746f18032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70222f0a1c47656e657261746542726f6b65725265706f7274526573706f6e7365120f0a077461736b5f696418012001280922370a1647657442726f6b65725265706f727452657175657374120f0a077461736b5f6964180120012809120c0a0470616765180220012805229b010a1747657442726f6b65725265706f7274526573706f6e7365124a0a0d62726f6b65725f7265706f727418012003280b32332e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e42726f6b65725265706f727412120a0a6974656d73436f756e7418022001280512120a0a7061676573436f756e74180320012805120c0a047061676518042001280522da080a0c42726f6b65725265706f727412100a0874726164655f696418012001280912100a086f726465725f6964180220012809120c0a046669676918032001280912140a0c657865637574655f7369676e18042001280912320a0e74726164655f6461746574696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012100a0865786368616e676518062001280912120a0a636c6173735f636f646518072001280912110a09646972656374696f6e180820012809120c0a046e616d65180920012809120e0a067469636b6572180a2001280912400a057072696365180b2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512100a087175616e74697479180c2001280312470a0c6f726465725f616d6f756e74180d2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512430a096163695f76616c7565180e2001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e124d0a12746f74616c5f6f726465725f616d6f756e74180f2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124c0a1162726f6b65725f636f6d6d697373696f6e18102001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c7565124e0a1365786368616e67655f636f6d6d697373696f6e18112001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512570a1c65786368616e67655f636c656172696e675f636f6d6d697373696f6e18122001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512430a097265706f5f7261746518132001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e120d0a05706172747918142001280912340a10636c6561725f76616c75655f6461746518152001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012320a0e7365635f76616c75655f6461746518162001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012150a0d62726f6b65725f737461747573181720012809121f0a1773657061726174655f61677265656d656e745f7479706518182001280912210a1973657061726174655f61677265656d656e745f6e756d626572181920012809121f0a1773657061726174655f61677265656d656e745f64617465181a2001280912150a0d64656c69766572795f74797065181b2001280922a8020a204765744469766964656e6473466f726569676e497373756572526571756573741280010a2267656e65726174655f6469765f666f726569676e5f6973737565725f7265706f727418012001280b32522e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47656e65726174654469766964656e6473466f726569676e4973737565725265706f727452657175657374480012760a1d6765745f6469765f666f726569676e5f6973737565725f7265706f727418022001280b324d2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744469766964656e6473466f726569676e4973737565725265706f727452657175657374480042090a077061796c6f616422b0020a214765744469766964656e6473466f726569676e497373756572526573706f6e7365128a010a2b67656e65726174655f6469765f666f726569676e5f6973737565725f7265706f72745f726573706f6e736518012001280b32532e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47656e65726174654469766964656e6473466f726569676e4973737565725265706f7274526573706f6e7365480012730a196469765f666f726569676e5f6973737565725f7265706f727418022001280b324e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744469766964656e6473466f726569676e4973737565725265706f7274526573706f6e7365480042090a077061796c6f61642293010a2b47656e65726174654469766964656e6473466f726569676e4973737565725265706f72745265717565737412120a0a6163636f756e745f696418012001280912280a0466726f6d18022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012260a02746f18032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022470a264765744469766964656e6473466f726569676e4973737565725265706f727452657175657374120f0a077461736b5f6964180120012809120c0a0470616765180220012805223f0a2c47656e65726174654469766964656e6473466f726569676e4973737565725265706f7274526573706f6e7365120f0a077461736b5f696418012001280922cd010a274765744469766964656e6473466f726569676e4973737565725265706f7274526573706f6e7365126c0a1f6469766964656e64735f666f726569676e5f6973737565725f7265706f727418012003280b32432e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4469766964656e6473466f726569676e4973737565725265706f727412120a0a6974656d73436f756e7418022001280512120a0a7061676573436f756e74180320012805120c0a047061676518042001280522c9040a1c4469766964656e6473466f726569676e4973737565725265706f7274122f0a0b7265636f72645f6461746518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012300a0c7061796d656e745f6461746518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012150a0d73656375726974795f6e616d65180320012809120c0a046973696e18042001280912160a0e6973737565725f636f756e74727918052001280912100a087175616e7469747918062001280312420a086469766964656e6418072001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e124d0a1365787465726e616c5f636f6d6d697373696f6e18082001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12480a0e6469766964656e645f67726f737318092001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e123d0a03746178180a2001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12490a0f6469766964656e645f616d6f756e74180b2001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12100a0863757272656e6379180c200128092a6d0a0e4f7065726174696f6e5374617465121f0a1b4f5045524154494f4e5f53544154455f554e5350454349464945441000121c0a184f5045524154494f4e5f53544154455f45584543555445441001121c0a184f5045524154494f4e5f53544154455f43414e43454c454410022a8f0c0a0d4f7065726174696f6e54797065121e0a1a4f5045524154494f4e5f545950455f554e535045434946494544100012180a144f5045524154494f4e5f545950455f494e5055541001121b0a174f5045524154494f4e5f545950455f424f4e445f544158100212240a204f5045524154494f4e5f545950455f4f55545055545f534543555249544945531003121c0a184f5045524154494f4e5f545950455f4f5645524e49474854100412160a124f5045524154494f4e5f545950455f544158100512260a224f5045524154494f4e5f545950455f424f4e445f52455041594d454e545f46554c4c1006121c0a184f5045524154494f4e5f545950455f53454c4c5f434152441007121f0a1b4f5045524154494f4e5f545950455f4449564944454e445f544158100812190a154f5045524154494f4e5f545950455f4f5554505554100912210a1d4f5045524154494f4e5f545950455f424f4e445f52455041594d454e54100a12210a1d4f5045524154494f4e5f545950455f5441585f434f5252454354494f4e100b121e0a1a4f5045524154494f4e5f545950455f534552564943455f464545100c121e0a1a4f5045524154494f4e5f545950455f42454e454649545f544158100d121d0a194f5045524154494f4e5f545950455f4d415247494e5f464545100e12160a124f5045524154494f4e5f545950455f425559100f121b0a174f5045524154494f4e5f545950455f4255595f43415244101012230a1f4f5045524154494f4e5f545950455f494e5055545f534543555249544945531011121e0a1a4f5045524154494f4e5f545950455f53454c4c5f4d415247494e1012121d0a194f5045524154494f4e5f545950455f42524f4b45525f4645451013121d0a194f5045524154494f4e5f545950455f4255595f4d415247494e1014121b0a174f5045524154494f4e5f545950455f4449564944454e44101512170a134f5045524154494f4e5f545950455f53454c4c101612190a154f5045524154494f4e5f545950455f434f55504f4e1017121e0a1a4f5045524154494f4e5f545950455f535543434553535f464545101812240a204f5045524154494f4e5f545950455f4449564944454e445f5452414e53464552101912250a214f5045524154494f4e5f545950455f4143435255494e475f5641524d415247494e101a12280a244f5045524154494f4e5f545950455f57524954494e475f4f46465f5641524d415247494e101b121f0a1b4f5045524154494f4e5f545950455f44454c49564552595f425559101c12200a1c4f5045524154494f4e5f545950455f44454c49564552595f53454c4c101d121d0a194f5045524154494f4e5f545950455f545241434b5f4d464545101e121d0a194f5045524154494f4e5f545950455f545241434b5f50464545101f12220a1e4f5045524154494f4e5f545950455f5441585f50524f4752455353495645102012270a234f5045524154494f4e5f545950455f424f4e445f5441585f50524f47524553534956451021122b0a274f5045524154494f4e5f545950455f4449564944454e445f5441585f50524f47524553534956451022122a0a264f5045524154494f4e5f545950455f42454e454649545f5441585f50524f47524553534956451023122d0a294f5045524154494f4e5f545950455f5441585f434f5252454354494f4e5f50524f4752455353495645102412270a234f5045524154494f4e5f545950455f5441585f5245504f5f50524f47524553534956451025121b0a174f5045524154494f4e5f545950455f5441585f5245504f102612200a1c4f5045524154494f4e5f545950455f5441585f5245504f5f484f4c44102712220a1e4f5045524154494f4e5f545950455f5441585f5245504f5f524546554e441028122c0a284f5045524154494f4e5f545950455f5441585f5245504f5f484f4c445f50524f47524553534956451029122e0a2a4f5045524154494f4e5f545950455f5441585f5245504f5f524546554e445f50524f4752455353495645102a121a0a164f5045524154494f4e5f545950455f4449565f455854102b12280a244f5045524154494f4e5f545950455f5441585f434f5252454354494f4e5f434f55504f4e102c32f3060a114f7065726174696f6e73536572766963651284010a0d4765744f7065726174696f6e7312382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e73526571756573741a392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4f7065726174696f6e73526573706f6e73651281010a0c476574506f7274666f6c696f12372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f7274666f6c696f526571756573741a382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f7274666f6c696f526573706f6e73651281010a0c476574506f736974696f6e7312372e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f736974696f6e73526571756573741a382e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f736974696f6e73526573706f6e73651290010a1147657457697468647261774c696d697473123c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e57697468647261774c696d697473526571756573741a3d2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e57697468647261774c696d697473526573706f6e7365128a010a0f47657442726f6b65725265706f7274123a2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e42726f6b65725265706f7274526571756573741a3b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e42726f6b65725265706f7274526573706f6e736512ae010a194765744469766964656e6473466f726569676e49737375657212472e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744469766964656e6473466f726569676e497373756572526571756573741a482e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4765744469766964656e6473466f726569676e497373756572526573706f6e736542610a1c72752e74696e6b6f66662e70696170692e636f6e74726163742e763150015a0c2e2f3b696e76657374617069a202055449415049aa021454696e6b6f66662e496e766573744170692e5631ca021154696e6b6f66665c496e766573745c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

