<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: mesh.proto

/**
 *
 * Note: these enum names must EXACTLY match the string used in the device
 * bin/build-all.sh script.
 * Because they will be used to find firmware filenames in the android app for OTA updates.
 * To match the old style filenames, _ is converted to -, p is converted to .
 *
 * Protobuf enum <code>HardwareModel</code>
 */
class HardwareModel
{
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V2 = 1;</code>
     */
    const TLORA_V2 = 1;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V1 = 2;</code>
     */
    const TLORA_V1 = 2;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V2_1_1P6 = 3;</code>
     */
    const TLORA_V2_1_1P6 = 3;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TBEAM = 4;</code>
     */
    const TBEAM = 4;
    /**
     *
     * The original heltec WiFi_Lora_32_V2, which had battery voltage sensing hooked to GPIO 13
     * (see HELTEC_V2 for the new version).
     *
     * Generated from protobuf enum <code>HELTEC_V2_0 = 5;</code>
     */
    const HELTEC_V2_0 = 5;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TBEAM_V0P7 = 6;</code>
     */
    const TBEAM_V0P7 = 6;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>T_ECHO = 7;</code>
     */
    const T_ECHO = 7;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V1_1P3 = 8;</code>
     */
    const TLORA_V1_1P3 = 8;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>RAK4631 = 9;</code>
     */
    const RAK4631 = 9;
    /**
     *
     * The new version of the heltec WiFi_Lora_32_V2 board that has battery sensing hooked to GPIO 37.
     * Sadly they did not update anything on the silkscreen to identify this board
     *
     * Generated from protobuf enum <code>HELTEC_V2_1 = 10;</code>
     */
    const HELTEC_V2_1 = 10;
    /**
     *
     * Ancient heltec WiFi_Lora_32 board
     *
     * Generated from protobuf enum <code>HELTEC_V1 = 11;</code>
     */
    const HELTEC_V1 = 11;
    /**
     *
     * New T-BEAM with ESP32-S3 CPU
     *
     * Generated from protobuf enum <code>LILYGO_TBEAM_S3_CORE = 12;</code>
     */
    const LILYGO_TBEAM_S3_CORE = 12;
    /**
     *
     * RAK WisBlock ESP32 core: https://docs.rakwireless.com/Product-Categories/WisBlock/RAK11200/Overview/
     *
     * Generated from protobuf enum <code>RAK11200 = 13;</code>
     */
    const RAK11200 = 13;
    /**
     *
     * B&Q Consulting Nano Edition G1: https://uniteng.com/wiki/doku.php?id=meshtastic:nano
     *
     * Generated from protobuf enum <code>NANO_G1 = 14;</code>
     */
    const NANO_G1 = 14;
    /**
     *
     * B&Q Consulting Station Edition G1: https://uniteng.com/wiki/doku.php?id=meshtastic:station
     *
     * Generated from protobuf enum <code>STATION_G1 = 25;</code>
     */
    const STATION_G1 = 25;
    /**
     *
     * Less common/prototype boards listed here (needs one more byte over the air)
     *
     * Generated from protobuf enum <code>LORA_RELAY_V1 = 32;</code>
     */
    const LORA_RELAY_V1 = 32;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>NRF52840DK = 33;</code>
     */
    const NRF52840DK = 33;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>PPR = 34;</code>
     */
    const PPR = 34;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>GENIEBLOCKS = 35;</code>
     */
    const GENIEBLOCKS = 35;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>NRF52_UNKNOWN = 36;</code>
     */
    const NRF52_UNKNOWN = 36;
    /**
     *
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>PORTDUINO = 37;</code>
     */
    const PORTDUINO = 37;
    /**
     *
     * The simulator built into the android app
     *
     * Generated from protobuf enum <code>ANDROID_SIM = 38;</code>
     */
    const ANDROID_SIM = 38;
    /**
     *
     * Custom DIY device based on &#64;NanoVHF schematics: https://github.com/NanoVHF/Meshtastic-DIY/tree/main/Schematics
     *
     * Generated from protobuf enum <code>DIY_V1 = 39;</code>
     */
    const DIY_V1 = 39;
    /**
     *
     * nRF52840 Dongle : https://www.nordicsemi.com/Products/Development-hardware/nrf52840-dongle/
     *
     * Generated from protobuf enum <code>NRF52840_PCA10059 = 40;</code>
     */
    const NRF52840_PCA10059 = 40;
    /**
     *
     * Custom Disaster Radio esp32 v3 device https://github.com/sudomesh/disaster-radio/tree/master/hardware/board_esp32_v3
     *
     * Generated from protobuf enum <code>DR_DEV = 41;</code>
     */
    const DR_DEV = 41;
    /**
     *
     * M5 esp32 based MCU modules with enclosure, TFT and LORA Shields. All Variants (Basic, Core, Fire, Core2, Paper) https://m5stack.com/
     *
     * Generated from protobuf enum <code>M5STACK = 42;</code>
     */
    const M5STACK = 42;
    /**
     *
     * Reserved ID For developing private Ports. These will show up in live traffic sparsely, so we can use a high number. Keep it within 8 bits.
     *
     * Generated from protobuf enum <code>PRIVATE_HW = 255;</code>
     */
    const PRIVATE_HW = 255;
}

