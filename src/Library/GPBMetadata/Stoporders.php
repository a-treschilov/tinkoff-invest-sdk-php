<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace GPBMetadata;

class Stoporders
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
            "0abb130a1073746f706f72646572732e70726f746f122574696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76311a0c636f6d6d6f6e2e70726f746f2293040a14506f737453746f704f726465725265717565737412100a04666967691801200128094202180112100a087175616e74697479180220012803123f0a05707269636518032001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e12440a0a73746f705f707269636518042001280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e51756f746174696f6e124c0a09646972656374696f6e18052001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53746f704f72646572446972656374696f6e12120a0a6163636f756e745f696418062001280912570a0f65787069726174696f6e5f7479706518072001280e323e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53746f704f7264657245787069726174696f6e54797065124d0a0f73746f705f6f726465725f7479706518082001280e32342e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53746f704f7264657254797065122f0a0b6578706972655f6461746518092001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012150a0d696e737472756d656e745f6964180a20012809222e0a15506f737453746f704f72646572526573706f6e736512150a0d73746f705f6f726465725f6964180120012809222a0a1447657453746f704f72646572735265717565737412120a0a6163636f756e745f6964180120012809225e0a1547657453746f704f7264657273526573706f6e736512450a0b73746f705f6f726465727318012003280b32302e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53746f704f7264657222430a1643616e63656c53746f704f726465725265717565737412120a0a6163636f756e745f696418012001280912150a0d73746f705f6f726465725f696418022001280922430a1743616e63656c53746f704f72646572526573706f6e736512280a0474696d6518012001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7022b3040a0953746f704f7264657212150a0d73746f705f6f726465725f696418012001280912160a0e6c6f74735f726571756573746564180220012803120c0a0466696769180320012809124c0a09646972656374696f6e18042001280e32392e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53746f704f72646572446972656374696f6e12100a0863757272656e637918052001280912480a0a6f726465725f7479706518062001280e32342e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e53746f704f7264657254797065122f0a0b6372656174655f6461746518072001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012380a1461637469766174696f6e5f646174655f74696d6518082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012330a0f65787069726174696f6e5f74696d6518092001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7012400a057072696365180a2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512450a0a73746f705f7072696365180b2001280b32312e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e4d6f6e657956616c756512160a0e696e737472756d656e745f756964180c200128092a770a1253746f704f72646572446972656374696f6e12240a2053544f505f4f524445525f444952454354494f4e5f554e5350454349464945441000121c0a1853544f505f4f524445525f444952454354494f4e5f4255591001121d0a1953544f505f4f524445525f444952454354494f4e5f53454c4c10022aa5010a1753746f704f7264657245787069726174696f6e54797065122a0a2653544f505f4f524445525f45585049524154494f4e5f545950455f554e5350454349464945441000122f0a2b53544f505f4f524445525f45585049524154494f4e5f545950455f474f4f445f54494c4c5f43414e43454c1001122d0a2953544f505f4f524445525f45585049524154494f4e5f545950455f474f4f445f54494c4c5f4441544510022a90010a0d53746f704f7264657254797065121f0a1b53544f505f4f524445525f545950455f554e5350454349464945441000121f0a1b53544f505f4f524445525f545950455f54414b455f50524f4649541001121d0a1953544f505f4f524445525f545950455f53544f505f4c4f53531002121e0a1a53544f505f4f524445525f545950455f53544f505f4c494d4954100332c0030a1153746f704f726465727353657276696365128a010a0d506f737453746f704f72646572123b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f737453746f704f72646572526571756573741a3c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e506f737453746f704f72646572526573706f6e7365128a010a0d47657453746f704f7264657273123b2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657453746f704f7264657273526571756573741a3c2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e47657453746f704f7264657273526573706f6e73651290010a0f43616e63656c53746f704f72646572123d2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e63656c53746f704f72646572526571756573741a3e2e74696e6b6f66662e7075626c69632e696e766573742e6170692e636f6e74726163742e76312e43616e63656c53746f704f72646572526573706f6e736542610a1c72752e74696e6b6f66662e70696170692e636f6e74726163742e763150015a0c2e2f3b696e76657374617069a202055449415049aa021454696e6b6f66662e496e766573744170692e5631ca021154696e6b6f66665c496e766573745c5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

